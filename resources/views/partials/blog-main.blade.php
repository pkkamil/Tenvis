<?php
    $categories = array();
    foreach($posts as $post) {
        array_push($categories, $post -> tag);
    }
    $categories = array_unique($categories);
?>

<article id="blog">
    <h3 class="title">BLOG</h3>
    <section class="posts-label">
        <span data-filter="all" class="list">all</span>
        @foreach ($categories as $category)
    <span data-filter="{{$category}}" class="list">{{$category}}</span>
        @endforeach
    </section>
    <article class="blog-section">
            @foreach ($posts as $post)
        <section class="single-blog-outer {{$post -> tag}}">
        <a class="view-single-blog" href="/blog/post/{{$post -> id}}">
                <div class="img-box">
                    <img src={{"/resources/img/blog/{$post -> image}.jpg"}} alt="" />
                </div>
                <section class="single-blog-inner">
                    <span data-filter="{{$post -> tag}}" class="img-label list">{{$post -> tag}}</span>
                    <h4>
                        {{$post -> title}}
                    </h4>
                    <h5>
                        <a href="author/{{$authors->find('id', $post -> user_id)}}" class="author">{{$authors->where('id', $post -> user_id)->first()->name}}</a>, {{$post -> updated_at->format('d M Y')}}&nbsp;{{$post -> updated_at->format('H:m:s')}}
                    </h5>
                </section>
            </a>
        </section>
            @endforeach
    </article>
</article>
