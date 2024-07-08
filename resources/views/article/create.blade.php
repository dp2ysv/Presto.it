<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-4">{{__('ui.PublishAnArticle')}}</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-6 bg-white articleFormWrapper sideShadows">
                <livewire:article-form />
            </div>
        </div>
    </div>
</x-layout>
