<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <header class="col-12 d-flex justify-content-center" id="headerWrapper">
                <div id="headerInner">
                    {{-- <img src="/media/header-short.webp" alt=""> --}}
                </div>
            </header>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="col-12 text-center wrapper d-flex align-items-center justify-content-center">
                <h1 class="display-4">{{__('ui.RecentlyPublishedArticles')}}</h1>
            </div>
            <div
                class="col-12 col-md-9 col-lg-6 d-flex flex-column align-items-center text-center bg-white min-vh-100 pt-5 sideShadows">
                @foreach ($lastArticles as $article)
                    @if ($article->accepted == true)
                        <x-card :article=$article />
                    @endif
                @endforeach
                <a href="{{route('article.create')}}">
                    <button class="btnBig mb-3">{{__('ui.InsertAd')}} <i class="fa-solid fa-plus ps-2"
                            style="color: rgb(255, 0, 0);"></i></button>
                </a>
            </div>
        </div>
    </div>
</x-layout>