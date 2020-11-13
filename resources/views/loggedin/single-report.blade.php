<?php
    $auth = True;
    $scrollTo = 'none';
    $active = '';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="users-list dashboard-part">
    <section class="report">
        <h2 data-aos="fade-up" data-aos-once="true" class="report-title">Report #{{$report -> id}}</h2>
        <h3 data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="small">Reported by: <a href="{{ url('/profile/'.$report -> user_id) }}">{{ App\User::find($report -> user_id) -> name }}</a></h3>
        <h3 data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="small">Type: <span class="marked">{{ $report -> type }}</span> with ID: <span class="marked">{{ $report -> object_id }}</span></h3>
        @if ($report -> type == 'Post')
            <h3 data-aos="fade-up" data-aos-delay="700" data-aos-once="true" class="small">Title: <a href="{{ url('/blog/post/'.$report -> object_id) }}">{{ $report -> post -> title }}</a></h3>
        @else
            <h3 data-aos="fade-up" data-aos-delay="700" data-aos-once="true" class="small">Name: <a href="{{ url('/profile/'.$report -> object_id) }}">{{ $report -> user -> name }}</a></h3>
        @endif
        <h3 data-aos="fade-up" data-aos-delay="800" data-aos-once="true" class="content">Content of report:</h3>
        <p data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">{{ $report -> content }}</p>
        <h3 data-aos="fade-left" data-aos-delay="1100" data-aos-once="true" class="added_at">Added at: {{ $report -> created_at->format('d M Y')}}&nbsp;{{$report -> created_at->format('H:m:s')}}</h3>
        <section class="operations">
            <div data-aos="fade-right" data-aos-delay="800" data-aos-once="true">
                <a href="{{ url('/dashboard/reports/') }}">Back</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
                <a class="danger" href="{{ url('/dashboard/reports/'.$report -> id.'/delete') }}">Delete</a>
            </div>
        </section>
    </section>
</article>
@endsection
