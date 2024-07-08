<div class="d-flex justify-content-center ms-4" id="navRightButton">
    @guest
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="signInAnchor" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.SignIn/Register')}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item noDecoration" href="{{ route('login') }}">{{__('ui.Login')}}</a></li>
                <li><a class="dropdown-item noDecoration" href="{{ route('register') }}">{{__('ui.Register')}}</a></li>
            </ul>
        </div>
    @else
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.hello')}}, {{ Auth::User()->name }}
            </a>
            <ul class="dropdown-menu">
                <li class="ps-3">
                    <a class="noDecoration" href="{{ route('article.create') }}">{{__('ui.CreateArticle')}}</a>
                </li>
                @auth
                    @if (Auth::user()->is_admin)
                        <li class="ps-3 pt-2">
                            <a style="text-decoration: none;" href="{{ route('article.review') }}">{{__('ui.ReviewArticles')}}</a>
                        </li>
                    @endif
                @endauth
                <li class="dropdown-divider"></li>
                @if (Auth::user()->is_admin != true)
                    <li class="ps-3 pb-2">
                        <a href="{{ route('user.adminrequest') }}">{{__('ui.RequestAdmin')}}</a>
                    </li>
                @endif
                <li class="ps-3">

                    <a class="noDecoration" href=""
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form method="post" action="{{ route('logout') }}" id="logout-form" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
            </l>
    @endguest

    </div>
</div>