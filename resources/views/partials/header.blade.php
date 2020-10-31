<header class={{$headerClass}}>
    @include('partials.nav')
    @if ($scrollTo != 'none')
    <i class="fas fa-arrow-circle-down smooth-scroller" data-scroll="#{{$scrollTo}}"></i>
    @endif
    @if ($active == 'login')
    @include('partials.login-box')
    @endif
    @if ($active == 'register')
    @include('partials.register-box')
    @endif
    @if (stristr($active, 'reset-passwd'))
    @include('partials.reset-passwd-box')
    @endif
    @if ($active == 'verify')
    @include('partials.verify-box')
    @endif
    @if ($active == 'author')
    @include('partials.author-box')
    @endif
</header>


