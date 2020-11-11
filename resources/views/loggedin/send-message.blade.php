<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'account';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part">
    <section class="sending-message">
        <h2 data-aos="fade-up" data-aos-once="true">Sending message</h2>
        <h3 data-aos="fade-up" data-aos-delay="500" data-aos-once="true">To: {{ $user -> name }}</h3>
        <form action="{{ route('send') }}" method="POST" data-aos="fade-up" data-aos-delay="800" data-aos-once="true">
            @csrf
            <input type="hidden" name="profileId" value={{ $user -> id }}>
            <label  @error('message') style="color: #cf2727" @enderror for="message">Your message:</label>
            <textarea @error('message') style="border: 1px solid #cf2727" @enderror maxlength="1000" name="message" id="message"></textarea>
            <section class="operations">
                <div data-aos="fade-right" data-aos-delay="800" data-aos-once="true">
                    <button type="submit">Send</button>
                </div>
                <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
                    <a href="{{ url('/profile/'.$user -> id) }}">Back</a>
                </div>
            </section>
        </form>
    </section>
</article>
@endsection
