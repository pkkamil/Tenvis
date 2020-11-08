<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'posts';
    $headerClass = 'dashboard';
    $filter = True;
?>

@extends('layouts.master')
@section('content')
<div class="loader-container">
    <div class="loader"></div>
</div>
<article class="user-posts dashboard-part">
    <h2 data-aos="fade-down">Recently added posts:</h2>
    <section class="posts-label">
        <span data-filter="all" class="list" data-aos="fade-up">all</span>
        @foreach ($tags as $category)
    <span data-filter="{{$category -> name}}" class="list" data-aos="fade-up" data-aos-delay="{{ $loop -> iteration * 250 }}">{{$category -> name}}</span>
        @endforeach
    </section>
    <article class="blog-section auth" data-aos="fade-up" data-aos-delay="2000" data-aos-once="true">
        @foreach ($posts as $post)
            @if (Auth::user() -> role == 'Admin')
                <section class="single-blog-outer {{$post -> tag -> name}}">
                    <a class="view-single-blog" href="/blog/post/{{$post -> id}}">
                        <div class="img-box">
                            <img src={{$post -> image}} alt="" />
                        </div>
                        <section class="single-blog-inner">
                            <span data-filter="{{$post -> tag -> name}}" class="img-label list">{{$post -> tag -> name}}</span>
                            <h4>{{$post -> title}}</h4>
                            <h5>
                                @if ($post -> user)
                                <a href="profile/{{$post -> user -> id}}" class="author">{{$post -> user -> name}}</a>,
                                @else
                                <span class="author">Anonymous</span>,
                                @endif
                                {{$post -> updated_at->format('d M Y')}}&nbsp;{{$post -> updated_at->format('H:m:s')}}
                            </h5>
                        </section>
                    </a>
                </section>
            @elseif (Auth::user() -> role == 'writer')
                @if (Auth::user()-> id == $post -> user_id)
                    <section class="single-blog-outer {{$post -> tag -> name}}">
                        <a class="view-single-blog" href="/blog/post/{{$post -> id}}">
                            <div class="img-box">
                                <img src={{$post -> image}} alt="" />
                            </div>
                            <section class="single-blog-inner">
                                <span data-filter="{{$post -> tag -> name}}" class="img-label list">{{$post -> tag -> name}}</span>
                                <h4>{{$post -> title}}</h4>
                                <h5>
                                    <a href="author/{{$post -> user -> id}}" class="author">{{$post -> user -> name}}</a>, {{$post -> updated_at->format('d M Y')}}&nbsp;{{$post -> updated_at->format('H:m:s')}}
                                </h5>
                            </section>
                        </a>
                    </section>
                @endif
            @endif
        @endforeach
</article>
</article>
@endsection
