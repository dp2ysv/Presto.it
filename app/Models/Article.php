<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'price', 'description', 'category_id','user_id', 'accepted'];
// Funzioni di relazione
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function images(): HasMany {
        return $this->hasMany(Image::class);
    }
    // altre funzioni

    public function setAccepted($value){
        $this->accepted = $value;
        $this->save();
        return true;
    }

    public function toSearchableArray(){
        return[
            'id'=>$this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category
        ];
    }
}
