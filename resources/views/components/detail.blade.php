<div class="d-flex justify-content-center align-items-center">
    <div class="col-12 col-lg-8 sideShadows text-center bg-white d-flex flex-column align-items-center">
        <div class="container-fluid">
            <!-- Dettaglio annuncio da revisionare -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-8 d-flex flex-column align-items-center text-center bg-white"
                    style="min-height: 70vh;">

                    <!-- Controlla se l'articolo ha immagini -->
                    @if($article->images->count() > 0)
                        <div id="carouselExample" class="carousel slide mb-3">
                            <div class="carousel-inner">
                                @foreach ($article->images as $key => $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="rounded-start containObject"
                                    alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article->title }}'">
                                    </div>
                                @endforeach
                            </div>
                            @if ($article->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    @else
                        <!-- Carousel segnaposto -->
                        <div id="carouselExampleIndicators" class="carousel slide mb-3">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/media/img-not-found.jpg" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev" disabled>
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next" disabled>
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @endif

                    <div class="container-fluid mb-3" style="max-width: 90%;">
                        <div class="d-flex justify-content-center">
                            <div class="col-10 d-flex align-items-center">
                                <div class="card-body justify-content-center" style="font-size: 20px;">
                                    <p class="card-title mb-3"><strong>{{$article->title}}</strong></p>
                                    <p class="card-text"><strong>{{__('ui.Price')}}:</strong> {{$article->price}}.00 €
                                    </p>
                                    <p class="card-text"><strong>{{__('ui.Category')}}:</strong> <a
                                            href="{{route('article.categoryfilter', $article->category)}}">{{$article->category->name}}</a>
                                    </p>
                                    <hr>
                                    <div class="card-text"><strong>{{__('ui.Description')}}:</strong></div>
                                    <div class="mb-3">{{$article->description}}</div>
                                    <div class="card-text"><small class="text-body-secondary">{{__('ui.PublishedOn')}}:
                                            {{$article->created_at->format("d/m/y")}}</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{$slot}}
        </div>
    </div>
</div>