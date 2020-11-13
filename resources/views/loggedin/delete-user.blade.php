<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'account';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part delete">
    <section class="confirmation">
        <img class="avatar-img" src="{{ $user -> avatar }}" alt="" data-aos="fade-right">
        <h2>You want delete {{ $user -> name }} <br> with email: {{ $user -> email }}</h2>
        <h3>{{ Auth::user() -> name }}, Are you sure?</h3>
        <form action="{{ route('deleteOtherUser') }}" method="POST">
            @csrf
            <input type="hidden" name="profileId" value={{ $user -> id }}>
            <a href="{{ url()->previous() }}">Back</a>
            <button type="submit">Delete</button>
        </form>
    </section>
</article>
@endsection
