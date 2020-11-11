<?php
    $resizer = True;
    $active = 'blog';
    $isPost = true;
    $scrollTo = '';
?>

@extends('layouts.master')
@section('content')
<article id="post-content">
    {!!$post -> content!!}
</article>
<article class="divider second" @if ($post -> divider) style="background: url({{ $post -> divider }}) no-repeat 50% 50%; background-attachment: fixed; background-size: cover;" @endif>></article>
@include('partials.comments')
<section class="post-operations">
    <div data-aos="fade-left" data-aos-once="true">
        <a href="@if(stristr(url()->previous(), 'edit')) /blog @else{{ url()->previous() }}@endif">Back</a>
    </div>
    <div data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
        <a href="{{ url('/blog/post/'.$post -> id.'/report') }}">Report</a>
    </div>
    @if (Auth::user() and Auth::user() -> role == 'Admin')
    <div data-aos="fade-left" data-aos-delay="800" data-aos-once="true">
        <a href="{{ url('/blog/post/'.$post -> id.'/edit') }}">Edit</a>
    </div>
    <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
        <a href="{{ url('/blog/post/'.$post -> id.'/delete') }}">Delete</a>
    </div>
    @endif
</section>
@endsection


