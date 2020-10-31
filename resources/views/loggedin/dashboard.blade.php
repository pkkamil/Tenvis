<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'dashboard';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="activity-center dashboard-part  @if (count($posts) > 0)founded @endif">
    <section class="user-section">
        <img data-aos='fade-right' src="https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
        <h2 data-aos='fade-right' data-aos-delay='400'>Hello, {{ Auth::user()->name }}!</h2>
        <h3 data-aos='fade-right' data-aos-delay='800'>Below is your personal notebook.</h3>
        <form action="{{ route('saveNote') }}" method="POST">
            @csrf
            <textarea name="notes" data-aos='fade-right' data-aos-delay="1200"
                maxlength="120">{{ Auth::user()->note }}</textarea>
            <div class="button" data-aos='fade-right' data-aos-delay='1600'>
                <input type="submit" value="Save">
            </div>
        </form>
    </section>
    <section class="@if (count($posts) == 0)null-posts @else new-posts @endif">
        @if (Auth::user()->role != 'Reader')
            <h2 data-aos='fade-up'>Recently added posts:</h2>
        @endif
        @if (count($posts) > 0)
            <section class="posts-list">
                @foreach ($posts as $item)
                    @if ($loop -> index != 3)
                        @csrf
                        <section class="single-blog-outer" data-aos="fade-up" data-aos-delay="{{400 * $loop->iteration}}">
                            <a href="{{ url('/blog/post/'.$item -> id) }}">
                                <div class="img-box">
                                    {{-- <img src="{{ $item -> image }}" alt=""> --}}
                                    <img src="{{ $item -> image }}" alt="">
                                </div>
                                <section class="single-blog-inner">
                                    <h4>
                                        {{$item -> title}}
                                    </h4>
                                    <h5>
                                    <a href="author/{{ $item->user_id }}" class="author">{{App\User::find($item -> user_id)->name}}</a>, {{$item -> updated_at->format('d M Y')}}&nbsp;{{$item -> updated_at->format('H:m:s')}}
                                    </h5>
                                </section>
                            </a>
                        </section>
                    @endif
                @endforeach
            </section>
            {{-- <span class="other-count">+5 więcej</span> --}}
            @if (count($posts) > 3)
                <div data-aos='fade-up' data-aos-delay="1600">
                    <a href="{{url('/blog')}}" class="showAll">See all</a>
                </div>
            @endif
        @else
            <div class="emptyPosts">
                @if (Auth::user()->role == 'Admin')
                    <div data-aos='fade-up' data-aos-delay="400">
                        <h3>No new posts.</h3>
                        <h4>As soon as there is a new post, you will be informed!</h4>
                    </div>
                @elseif (Auth::user()->role == 'Writer')
                    <div data-aos='fade-up' data-aos-delay="400">
                        <h3>No new posts.</h3>
                        <h4>As soon as you add a new post it will appear here!</h4>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ route('editor') }}">Dodaj nowy post</a>
                    </div>
                @else
                    <div data-aos='fade-up' data-aos-delay="400">
                        <h3>Your account role is reader.</h3>
                        <h4>To become a writer you must submit a request to become a writer.</h4>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ route('editor') }}">Send request</a>
                    </div>
                @endif
            </div>
        @endif
    </section>
</article>
@endsection
