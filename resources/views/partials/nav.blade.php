<nav>
    <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
    </div>
    <div class="logo">
        <a href="/">TENVIS</a>
    </div>
    <div class="menu">
        <ul>
            <li><a @if ($active == 'home') class="active" @endif href="/#">Home</a></li>
            <li>
                <a href="/#about" class="smooth-scroller" data-scroll="#about">About</a>
            </li>
            <li>
                <a href="/#contact" class="smooth-scroller" data-scroll="#contact">Contact</a>
            </li>
                <li><a @if ($active == 'blog') class="active" @endif href="/blog">Blog</a></li>
            @Auth
                @if (Auth::user() -> hasVerifiedEmail())
                    <li><a href="/dashboard">My Profile</a></li>
                @else
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                @endif
            @else
                @if ($active != 'register')
                    <li><a @if (stristr($active, 'login')) class="active" @endif href="/login">Login</a></li>
                @endif
                @if ($active == 'register')
                    <li><a class="active" href="/register">Sign up</a></li>
                @endif
            @endauth
        </ul>
    </div>
</nav>
