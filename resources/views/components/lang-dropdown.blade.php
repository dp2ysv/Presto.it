<div class="dropdown">
    <button class="dropdown-toggle langWrapperButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        @if (session('locale') == "it" || !session('locale'))
            <img src="{{asset('vendor/blade-flags/language-it.svg')}}" width="24" height="24" alt="">
        @elseif (session('locale') == "en")
            <img src="{{asset('vendor/blade-flags/language-en.svg')}}" width="24" height="24" alt="">
        @elseif (session('locale') == "fr")
            <img src="{{asset('vendor/blade-flags/language-fr.svg')}}" width="24" height="24" alt="">
        @endif
    </button>
    <ul class="dropdown-menu langIconWrapper">
        <li class="langIconWrapper"><a class="dropdown-item" href="#"><x-_locale lang="it" /></a></li>
        <li class="langIconWrapper"><a class="dropdown-item" href="#"><x-_locale lang="en" /></a></li>
        <li class="langIconWrapper"><a class="dropdown-item" href="#"><x-_locale lang="fr" /></a></li>
    </ul>
</div>