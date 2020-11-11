<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'notifications';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="notifications dashboard-part sm">
    <section class="left-part">
        <img class="avatar-img" src="{{ App\User::find($singleMessage -> sender) -> avatar }}" alt="">
        <h2>@if (stristr($singleMessage -> title, 'New message')) New message @else {{$singleMessage -> title}} @endif</h2>
    <h3 class="from">From: <a href="{{ url('/profile/'.$singleMessage -> sender) }}">{{ App\User::find($singleMessage -> sender) -> name }}</a></h3>
    <p>{{ $singleMessage -> message }}</p>
    </section>
    <section class="right-part">
        <h2 data-aos="fade-left" data-aos-delay="500" data-aos-once="true">Actions</h2>
        <div data-aos="fade-left" data-aos-delay="800" data-aos-once="true">
        <a href="{{ url('/dashboard/account/edit') }}">Reply</a>
        </div>
        <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
            <a href="{{ url('/dashboard/notifications/'.$singleMessage -> id.'/delete') }}">Delete</a>
        </div>
        <div data-aos="fade-left" data-aos-delay="1400" data-aos-once="true">
            <a href="{{ url('/dashboard/notifications') }}">Back</a>
        </div>
    </section>
</article>
@endsection
