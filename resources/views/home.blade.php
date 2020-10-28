<?php
    $scrollTo = 'about';
    $active = 'home';
    $headerClass = 'home';
    $bg = 'bg-main';
?>

@extends('layouts.master')
@section('content')
@include('home-parts.about')
<article class="divider first"></article>
@include('home-parts.contact')
@endsection
