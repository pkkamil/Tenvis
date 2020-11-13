<?php
    $auth = False;
    $scrollTo = 'none';
    $active = 'blog';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part delete">
    <section class="confirmation sending-message">
        <img class="avatar-img" src="{{ $user -> avatar }}" alt="" data-aos="fade-up">
        <h2 class="report-title" data-aos="fade-up" data-aos-delay="500">Reporting {{ $user -> name }}</h2>
        <form class="report" action="{{ route('reportUser') }}" method="POST" data-aos="fade-up" data-aos-delay="800" data-aos-once="true">
            @csrf
            <input type="hidden" name="userId" value={{ $user -> id }}>
            <textarea @error('report') style="border: 1px solid #cf2727" @enderror maxlength="500" name="report" id="report"></textarea>
            <section class="operations">
                <div data-aos="fade-right" data-aos-delay="800" data-aos-once="true">
                    <button type="submit">Report</button>
                </div>
                <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
                    <a href="{{ url('/profile/'.$user -> id) }}">Back</a>
                </div>
            </section>
        </form>
    </section>
</article>
@endsection
