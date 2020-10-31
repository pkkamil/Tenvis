<article id="blog">
    <h3 class="title">BLOG</h3>
    <section class="posts-label">
        <span data-filter="all" class="list">all</span>
        @foreach ($tags as $category)
    <span data-filter="{{$category -> name}}" class="list">{{$category -> name}}</span>
        @endforeach
    </section>
    <article class="blog-section">
            @foreach ($posts as $post)
                @if ($post -> private != 1)
                    <section class="single-blog-outer {{$post -> tag -> name}}">
                        <a class="view-single-blog" href="/blog/post/{{$post -> id}}">
                            <div class="img-box">
                                <img src={{$post -> image}} alt="" />
                            </div>
                            <section class="single-blog-inner">
                                <span data-filter="{{$post -> tag -> name}}" class="img-label list">{{$post -> tag -> name}}</span>
                                <h4>{{$post -> title}}</h4>
                                <h5>
                                    <a href="author/{{$authors->find('id', $post -> user_id)}}" class="author">{{$authors->where('id', $post -> user_id)->first()->name}}</a>, {{$post -> updated_at->format('d M Y')}}&nbsp;{{$post -> updated_at->format('H:m:s')}}
                                </h5>
                            </section>
                        </a>
                    </section>
                @elseif (Auth::user())
                    @if ($post -> private == 1 and Auth::user()-> id == $post -> user_id)
                        <section class="single-blog-outer {{$post -> tag -> name}}">
                            <a class="view-single-blog" href="/blog/post/{{$post -> id}}">
                                <div class="img-box">
                                    <img src={{$post -> image}} alt="" />
                                </div>
                                <section class="single-blog-inner">
                                    <span data-filter="{{$post -> tag -> name}}" class="img-label list">{{$post -> tag -> name}}</span>
                                    <h4>{{$post -> title}}</h4>
                                    <h5>
                                        <a href="author/{{$authors->find('id', $post -> user_id)}}" class="author">{{$authors->where('id', $post -> user_id)->first()->name}}</a>, {{$post -> updated_at->format('d M Y')}}&nbsp;{{$post -> updated_at->format('H:m:s')}}
                                    </h5>
                                </section>
                            </a>
                        </section>
                    @endif
                @endif
            @endforeach
    </article>
</article>
