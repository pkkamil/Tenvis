<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'account';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part">
    <section class="account-settings">
        <section class="left-part">
            <img src="{{ Auth::user() -> avatar }}" alt="" data-aos="fade-right">
            <h4 data-aos="fade-right" data-aos-delay="500" class="name"><span class="title-tag">Your name:</span> {{ Auth::user() -> name }}</h4>
            <h4 data-aos="fade-right" data-aos-delay="800"><span class="title-tag bk">Your email:</span> {{ Auth::user() -> email }}</h4>
            <h4 data-aos="fade-right" data-aos-delay="1100"><span class="title-tag">Age:</span> {!! Auth::user() -> age ?? '<span class="unknown">unknown</span>' !!}</h4>
            <h4 data-aos="fade-right" data-aos-delay="1400"><span class="title-tag bk">Telephone:</span> {!! Auth::user() -> telephone ?? '<span class="unknown">unknown</span>' !!}</h4>
            <h4 data-aos="fade-right" data-aos-delay="1700"><span class="title-tag">Role:</span> {{ Auth::user() -> role }}</h4>
            <h4 data-aos="fade-right" data-aos-delay="2000"><span class="title-tag bk">Account created:</span> {{Auth::user()-> created_at->format('d M Y')}}&nbsp;{{Auth::user()-> created_at->format('H:m:s')}}</h4>
            <h4 data-aos="fade-right" data-aos-delay="2300"><span class="title-tag">Posted posts:</span> {{count(Auth::user()-> posts)}}</h4>
        </section>
        <section class="right-part">
            <h2 data-aos="fade-left" data-aos-delay="500">Actions</h2>
            <div data-aos="fade-left" data-aos-delay="800">
                <a href="">Edit account</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1100">
                <a href="">Change password</a>
            </div>
            @if (Auth::user() -> role != 'Reader')
            <div data-aos="fade-left" data-aos-delay="1400">
                <a href="{{ url('/blog/author/'.Auth::user() -> id) }}">Your Posts</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1700">
                <a href="">Writers ranking</a>
            </div>
            @endif
        </section>
    </section>
</article>
@endsection
