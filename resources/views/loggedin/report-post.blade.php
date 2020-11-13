<?php
    $auth = False;
    $scrollTo = 'none';
    $active = 'blog';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part delete" style="background: url({{ $post -> image }}); background-size:cover;background-position:center;">
    <section class="confirmation sending-message">
        @if ($post -> user)
            <img class="avatar-img" src="{{ $post -> user -> avatar }}" alt="" data-aos="fade-up">
            @if ($post -> user -> id == Auth::id())
                <h2 class="report-title" data-aos="fade-up" data-aos-delay="500">Reporting your post</h2>
            @else
                <h2 class="report-title" data-aos="fade-up" data-aos-delay="500">Reporting {{ $post -> user -> name }}'s post</h2>
            @endif
        @else
            <img class="avatar-img" src="/resources/img/anonymous.png" alt="" data-aos="fade-up">
            <h2 class="report-title" data-aos="fade-up" data-aos-delay="500">Reporting someone's post</h2>
        @endif
        <form class="report" action="{{ route('reportPost') }}" method="POST" data-aos="fade-up" data-aos-delay="800" data-aos-once="true">
            @csrf
            <input type="hidden" name="postId" value={{ $post -> id }}>
            <textarea @error('report') style="border: 1px solid #cf2727" @enderror maxlength="500" name="report" id="report"></textarea>
            <section class="operations">
                <div data-aos="fade-right" data-aos-delay="800" data-aos-once="true">
                    <button type="submit">Report</button>
                </div>
                <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
                    <a href="{{ url('/blog/post/'.$post -> id) }}">Back</a>
                </div>
            </section>
        </form>
    </section>
</article>
@endsection
