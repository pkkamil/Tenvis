<?php
    $auth = False;
    $scrollTo = 'none';
    $active = 'blog';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part delete" style="background: url({{ $post -> image }})">
    <section class="confirmation">
        @if ($post -> user)
            <img class="avatar-img" src="{{ $post -> user -> avatar }}" alt="" data-aos="fade-up">
            @if ($post -> user -> id == Auth::id())
                <h2 data-aos="fade-up" data-aos-delay="500">You want delete your post</h2>
            @else
                <h2 data-aos="fade-up" data-aos-delay="500">You want delete {{ $post -> user -> name }}'s post</h2>
            @endif
        @else
            <img class="avatar-img" src="/resources/img/anonymous.png" alt="" data-aos="fade-up">
            <h2 data-aos="fade-up" data-aos-delay="500">You want delete someone's post</h2>
            <h3 data-aos="fade-up" data-aos-delay="800">{{ Auth::user() -> name }}, Are you sure?</h3>
        @endif
        <form action="{{ route('deletePost') }}" method="POST">
            @csrf
            <input type="hidden" name="postId" value={{ $post -> id }}>
            <div data-aos="fade-right" data-aos-delay="1100">
                <a href="{{ url()->previous() }}">Back</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1400" data-aos-once="true">
            <button type="submit">Delete</button>
            </div>
        </form>
    </section>
</article>
@endsection
