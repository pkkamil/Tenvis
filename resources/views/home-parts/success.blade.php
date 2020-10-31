<?php
    $active = 'success';
    $headerClass = 'success';
    $scrollTo = 'none';
?>

@extends('layouts.master')
@section('content')
<article class="success-contact">
    <span>
        <h3 data-aos="fade-up">Thank you for your email!</h3>
        <h4 data-aos="fade-up" data-aos-delay="600">We will write to you as soon as possible.</h4>
        <div data-aos="fade-up" data-aos-delay="1000">
            <a href="{{ url('/')}}">Back to homepage</a>
        </div>
    </span>
</article>
@endsection


