<form class="d-flex justify-content-center" role="search" action="{{ route('article.search') }}" method="get">
    <input class="form-control me-2 text-truncate" type="search" placeholder="{{__('ui.SearchBy')}}" aria-label="Search" id="navSearchbar"
        name="query">
    <button class="btn" type="submit" id="navSearchBtn">{{__('ui.Search')}}</button>
</form>