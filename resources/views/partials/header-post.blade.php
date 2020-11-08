<header class='blog' style="background: url({{$post -> image}}); background-position: center; background-size: cover;">
    @include('partials.nav')
    <div class="box-header">
        <h3>{{$post -> title}}</h3>
        <h5>Posted by @if ($post -> user) <a href="/profile/{{$post -> user -> id}}" class="author">{{$post -> user -> name}}</a>@else <span class="author">Anonymous</span>@endif, {{$post -> updated_at->format('d M Y')}}&nbsp;{{$post -> updated_at->format('H:m:s')}}</h5>
    </div>
    <i class="fas fa-arrow-circle-down smooth-scroller" data-scroll="#post-content"></i>
</header>

