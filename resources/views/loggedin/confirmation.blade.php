<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'account';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part">
    <section class="confirmation">
        <img class="avatar-img" src="{{ Auth::user() -> avatar }}" alt="" data-aos="fade-right">
        <h2>{{ Auth::user() -> name }}, Are you sure?</h2>
        <form action="{{ route('deleteUser') }}" method="POST">
            @csrf
            <a href="{{ route('account') }}">Back</a>
            <button class="danger" type="submit">Delete</button>
        </form>
    </section>
</article>
@endsection
