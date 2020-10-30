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
<article class="divider second"></article>
@include('partials.comments')
@endsection


