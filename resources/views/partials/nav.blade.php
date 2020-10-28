<nav>
    <div class="menu-icon">
        <i class="fas fa-bars fa-2x"></i>
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
            <li><a href="/login">Konto</a></li>
            @else
            <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </div>
</nav>
