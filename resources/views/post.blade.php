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
@endsection


