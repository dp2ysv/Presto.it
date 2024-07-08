<div class="container-fluid">
    <div class="d-flex justify-content-around align-items-center" id="navbar">
        <!-- Logo -->
        <div class="col-3 col-md-1 d-flex justify-content-center ms-4 ms-lg-0">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/media/Presto-logo.png" alt="Logo navbar"
                    id="navLogo"></a>
        </div>
        <!-- Div vuoto -->
        <div class="col-1"></div>
        <!-- Searchbar -->
        <div class="col-7 d-none d-lg-block d-flex justify-content-center">
            <x-searchbar />
        </div>
        <!-- Dropdown lingue -->
        <div class="col-1 me-2">
            <x-lang-dropdown />
        </div>
        <!-- Dropdown a destra -->
        <x-main-nav-dropdown />
    </div>
    <div class="d-flex d-block d-lg-none justify-content-center align-items-center pb-2" id="navbar">
        <x-searchbar />
    </div>
</div>