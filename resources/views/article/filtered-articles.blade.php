<x-layout>
    
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">{{__('ui.SerchResults')}}</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-6 text-center bg-white min-vh-100 pt-5 d-flex flex-column align-items-center">
            
                @forelse ($filteredArticles as $article)

                <x-card :article=$article/>
                @empty
                <div class="text-danger">{{__('ui.ThereAreNoArticlesMatchingTheSearch')}}</div>
                @endforelse
                
                <div>{{$filteredArticles->links()}}</div>
            </div>
        </div>
    </div>
</x-layout>