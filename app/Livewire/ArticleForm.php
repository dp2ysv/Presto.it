<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\File;

class ArticleForm extends Component
{
    use WithFileUploads;

    public $title;
    public $price;
    public $description;
    public $category_id;
    public $images = [];
    public $temporary_images;

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'category_id' => 'required'
        ], [
            'title.required' => 'Il titolo è obbligatorio.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'description.required' => 'La descrizione è obbligatoria.',
            'category_id.required' => 'Devi selezionare una categoria.'
        ]);

        // Creare l'articolo
        $this->article = Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => auth()->id(),
        ]);

        // Caricare e associare le immagini all'articolo
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                // nostro codice prima della modifica del crop
                // $article->images()->create(['path' => $image->store('images', 'public')]);

                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                // dispatch(new ResizeImage($newImage->path, 300, 300));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('message', "Grazie per aver creato l'annuncio. Attendi che venga approvato.");
        $this->cleanForm();

        return redirect()->route('home');
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category_id = '';
        $this->price = '';
        $this->images = [];
    }

    public function render()
    {
        return view('livewire.article-form');
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ], [
            'temporary_images.*.max' => 'Il file caricato eccede le dimensioni massime consentite (1024x1024)',
            'temporary_images.*.image' => 'Seleziona un file di tipo immagine (.jpg, .png, .svg, .tiff, ecc.)',
            'temporary_images.max' => 'Non puoi caricare più di 6 immagini per annuncio',
        ])) {
            foreach ($this->temporary_images as $image) {
                if (count($this->images) < 6){
                $this->images[] = $image;
                }
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
}
