<header class={{$headerClass}} @if ($id ?? '') style="background: url('/resources/img/blog/{{$bg}}.jpg');" @endif>
    @include('partials.nav')
    @if ($scrollTo != 'none')
    <i class="fas fa-arrow-circle-down smooth-scroller" data-scroll="#{{$scrollTo}}"></i>
    @endif
    @if ($login ?? '')
    @include('partials.login-box')
    @endif
    @if ($authorSite ?? '')
    @include('partials.author-box')
    @endif
</header>


