{{-- codice crop delle immagini --}}
<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapperNoBottom">
            <div class="col-12 text-center">
                <h1 class="display-4">{{__('ui.AllArticles')}}</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-6 text-center bg-white min-vh-100 pt-5 d-flex flex-column align-items-center sideShadows">
                @if (count($articles) == 0)
                <div class="textRed">Al momento non sono presenti articoli.</div>
                @endif
                @foreach ($articles as $article)
                    @if ($article->accepted == true)
                        <x-card :article=$article />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>







{{-- codice modificato --}}
{{-- <x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">Tutti gli Articoli</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-6 text-center bg-white min-vh-100 pt-5 d-flex flex-column align-items-center">
                @foreach ($articles as $article)
                    @if ($article->accepted == true)
                    <x-card :article=$article />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout> --}}






{{-- !Codice nostro --}}
{{-- <x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">Lista Articoli</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-6 text-center bg-white min-vh-100 pt-5 d-flex flex-column align-items-center">

                @foreach ($articles as $article)
                @if ($article->accepted == true)
                <x-card :article=$article/>
                @endif
                @endforeach

            </div>
        </div>
    </div>
</x-layout> --}}


{{-- Codice cosi com'è nella documentazione --}}
{{-- @if ($article_to_check->images->count())
@foreach ($article_to_check->images as $key $image)
<div class="col-6 col-md-4 mb-4">
    <img src="{{Storgae::url($image->path)}}" class="img-fluid rounded shadow" alt="Imagine {{$key +1}} dell'articolo ' {{$aticle_to_check->title}}">
</div>

@endforeach
@else
@for ($i = 0; $i < 6; $i++)
<div class="col-6 mb-4 text-center">
    <img src="https://picsum.photos/300" alt="imagine segnaposto" class="img-fluid rounded shadow">
</div>

@endfor

@endif --}}










