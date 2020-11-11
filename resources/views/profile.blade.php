<?php
    $dark = True;
    $scrollTo = 'none';
    $active = 'profile';
    $headerClass = 'profile';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part lrpart">
    <section class="account-settings">
        <section class="left-part">
            <img src="{{ $profile -> avatar }}" alt="" data-aos="fade-right">
            <h4 class="name" data-aos="fade-right" data-aos-delay="500"><span class="title-tag">Your name:</span> {{ $profile -> name }}</h4>
            <h4 data-aos="fade-right" data-aos-delay="800"><span class="title-tag bk">Your email:</span> {{ $profile -> email }}</h4>
            <h4 data-aos="fade-right" data-aos-delay="1100"><span class="title-tag">Age:</span> {!! $profile -> age ?? '<span class="unknown">unknown</span>' !!}</h4>
            <h4 data-aos="fade-right" data-aos-delay="1400"><span class="title-tag bk">Telephone:</span> {!! $profile -> telephone ?? '<span class="unknown">unknown</span>' !!}</h4>
            <h4 data-aos="fade-right" data-aos-delay="1700"><span class="title-tag">Role:</span> {{ $profile -> role }}</h4>
            <h4 data-aos="fade-right" data-aos-delay="2000"><span class="title-tag bk">Account created:</span> {{$profile -> created_at->format('d M Y')}}&nbsp;{{$profile -> created_at->format('H:m:s')}}</h4>
            <h4 data-aos="fade-right" data-aos-delay="2300"><span class="title-tag">Posted posts:</span> {{count($profile -> posts)}}</h4>
        </section>
        <section class="right-part">
            <h2 data-aos="fade-left" data-aos-delay="500">Actions</h2>
            @if (Auth::user() and Auth::user() -> role == 'Admin')
            <div data-aos="fade-left" data-aos-delay="600">
                <a href="{{ url('/profile/'.$profile -> id.'/edit') }}">Edit user</a>
            </div>
            @endif
            <div data-aos="fade-left" data-aos-delay="800">
            <a href="{{ url('/blog/author/'.$profile -> id) }}">{{ $profile -> name }}'s posts</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1100">
                <a href="{{ url()->current().'/message' }}">Send message</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1400">
                <a href="{{ url()->current().'/report' }}">Report user</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1700">
            <a href="{{ url()->previous() }}">Back</a>
            </div>
        </section>
    </section>
</article>
@endsection
