<header class={{$headerClass}} @if ($id ?? '') style="background: url('/resources/img/blog/{{$bg}}.jpg');" @endif>
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
    @if ($active == 'author')
    @include('partials.author-box')
    @endif
</header>


