<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">{{ __('ui.ArticlesInTheCategory')}} {{$category->name}}</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-6 text-center bg-white min-vh-100 pt-5 d-flex flex-column align-items-center">

                @if (count($category->articles) == 0)
                    <div class="text-danger">{{__('ui.ThereAreNoArticlesInTheCategory')}} {{$category->name}}</div>
                @else
                    @foreach ($category->articles as $article)
                        <x-card :article=$article />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-layout>