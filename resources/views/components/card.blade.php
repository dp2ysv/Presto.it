<div class="card mb-3 redBorder cardWrapper">

                <div class="d-flex g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center position-relative">
                        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : '/media/img-not-found.jpg'}}" class="cardImg rounded-start" alt="Immagine dell'articolo {{$article->title}}">

                        {{-- <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : '/media/img-not-found.jpg'}} " class="cardImg rounded-start" alt="Imagine dell'articolo {{$article->title}}"> --}}
                        <div id="cameraIcon">
                            <i class="fa-solid fa-camera fa-xs" style="color: #fd4949;"></i>
                            <span>{{$article->images->count()}}</span>
                        </div>

                    </div>
                    <div class="col-md-8 d-flex align-items-center cardTextWrapper">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text"><strong>{{__('ui.Price')}}:</strong> {{$article->price}}.00 €</p>
                            <p class="card-text"><strong>{{__('ui.Description')}}:</strong> {{$article->description}}</p>
                            <p class="card-text"><strong>{{__('ui.Category')}}:</strong> {{$article->category->name}}</p>

                            <p class="card-text"><small class="text-body-secondary">{{__('ui.PublishedOn')}} {{$article->created_at->format("d/m/y")}}</small></p>
                            <a href="{{route('article.show', compact('article'))}}"> <button class="cardBtn">{{__('ui.ShowDetail')}}</button> </a>
                        </div>
                    </div>

                </div>
            </div>