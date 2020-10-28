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
                <a href="/#about" class="smooth-scroller" data-scroll="#about">About</a
                    >
                </li>
                <li>
                    <a
                        href="/#contact"
                        class="smooth-scroller"
                        data-scroll="#contact"
                        >Contact</a
                    >
                </li>
                <li><a @if ($active == 'blog') class="active" @endif href="/blog">Blog</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
</nav>
