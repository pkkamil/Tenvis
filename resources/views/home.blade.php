<?php
    $resizer = True;
    $scrollTo = 'about';
    $active = 'home';
    $headerClass = 'home';
?>

@extends('layouts.master')
@section('content')
@include('home-parts.about')
<article class="divider first"></article>
@include('home-parts.contact')
@endsection
