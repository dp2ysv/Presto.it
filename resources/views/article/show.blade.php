
<x-layout>
    <div class="container-fluid">
<x-detail
:article="$article"
></x-detail>
    </div>
</x-layout>


{{-- !carousel nostro --}}
{{-- <x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-6 d-flex flex-column align-items-center text-center bg-white min-vh-100">

                <div id="carouselExampleIndicators" class="carousel slide mb-5">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/600/300"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/301"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/302"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/299"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/298"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/600/297"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <div class="container-fluid mb-3" style="max-width: 90%;">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="card-body justify-content-center" id="showCard">
                                <p class="card-title"><strong>{{$article->title}}</strong></p>
                                <p class="card-text"><strong>Prezzo:</strong> {{$article->price}} €</p>
                                <p class="card-text"><strong>Categoria:</strong> <a href="{{route('article.categoryfilter', $article->category)}}">{{$article->category->name}}</a></p>
                                <hr>
                                <p class="card-text"><strong>Descrizione:</strong> {{$article->description}}</p>
                                <p class="card-text"><small class="text-body-secondary">Pubblicato il:
                                        {{$article->created_at->format("d/m/y")}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{route('article.index')}}"><button class="cardBtn">Torna indietro</button></a>
            </div>
        </div>
    </div>
</x-layout> --}}

{{-- ! Codice della documentazione --}}
{{-- <div class="col-12 mb-3">
    @if($article->images->count()>0)
    <div id=".." class="..">
        <div class="...">
            @foreach ($article->images as  $key $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{Storage::url($image->path)}}"  class="" alt="Immagine{{$key + 1}} dell'articolo {{$article->title}}">
            </div>

            @endforeach
            @if ($article->images->count()>1)
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            @endif
        </div>

    </div>
    @else
    <img src="https//picsum.photos/300" alt="Nessuna foto inserita dall'utente">
    @endif
</div> --}}