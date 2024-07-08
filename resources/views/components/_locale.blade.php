<form action="{{route('setLocale', $lang)}}" class="d-inline" method="POST">
    @csrf

    <button type="submit" class="langButton">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="32" height="32" alt="">
        <div class="ms-2 d-inline">
            @if ($lang == "en")
                English
            @elseif ($lang == "fr")
                Français
            @elseif ($lang == "it")
                Italiano
            @endif
        </div>
    </button>

</form>