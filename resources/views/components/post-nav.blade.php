<div class="container-fluid">
    <!-- Versione per dispositivi grandi -->
    <div class="d-none d-lg-flex justify-content-between align-items-center" id="postNavWrapper">
        <div class="col-10 d-flex align-items-center justify-content-between ps-3 py-3" style="height: 100%;">
            <div class="textRed categoryWrappers">
                <a href="{{ route('article.index') }}">{{__('ui.allCategories')}}</a>
            </div>
            @foreach ($categories as $category)
            <div class="mx-3 textRed categoryWrappers">
                <a href="{{ route('article.categoryfilter', ['category' => $category->id]) }}">
                    {{ __('ui.' . $category->translation_key) }}
                </a>
            </div>
        @endforeach

        </div>
        <div class="d-flex align-items-center justify-content-center" id="newArticleButton">
            <a href="{{route('article.create')}}" id="newArticleAnchor">
                {{__('ui.InsertAd')}}<i class="fa-solid fa-plus ps-2" style="color: rgb(255, 255, 255);"></i>
            </a>
        </div>
    </div>
    <!-- Versione per dispositivi mobili -->
    <div class="d-flex d-lg-none justify-content-between align-items-center" id="postNavWrapper">
        <div class="col-6 d-flex align-items-center justify-content-around ps-3" style="height: 100%;">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{__('ui.allCategories')}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"
                        href="{{route('article.index')}}">{{__('ui.allCategories')}}</a>
                    <div class="dropdown-divider"></div>
                    @foreach ($categories as $category)
                        <a class="dropdown-item categoryWrappers" href="{{route('article.categoryfilter', compact('category'))}}">{{ __('ui.' . $category->translation_key) }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-center" id="newArticleButton">
            <a href="{{route('article.create')}}" id="newArticleAnchor"> {{__('ui.InsertAd')}} <i class="fa-solid fa-plus ps-2" style="color: rgb(255, 255, 255);"></i>
            </a>
        </div>
    </div>
</div>