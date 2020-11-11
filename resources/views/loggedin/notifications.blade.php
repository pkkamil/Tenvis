<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'notifications';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="notifications dashboard-part">
    <section>
        <h2 class="title">Notifications</h2>
        @foreach ($notifications as $singleMessage)
                <a href="{{ url('/dashboard/notifications/'.$singleMessage -> id) }}" class="single-message @if($singleMessage -> unread)unread @endif">
                    <img class="avatar-img" src="{{ App\User::find($singleMessage -> sender) -> avatar }}" alt="">
                    <span class="content">
                        <h3>{{ $singleMessage -> title }}</h3>
                        <p>{{ $singleMessage -> message }}</p>
                    </span>
                    <span class="actions">
                        @if ($singleMessage -> unread)
                    <i data-action="toggle" data-id="{{ $singleMessage -> id }}" class="fas fa-envelope-open-text action"></i>
                        @else
                            <i data-action="toggle" data-id="{{ $singleMessage -> id }}" class="fas fa-envelope-open action"></i>
                        @endif
                        <i data-action="delete" data-id="{{ $singleMessage -> id }}" class="fas fa-trash-alt action"></i>
                    </span>
                </a>
        @endforeach
        <span class="pagination">
            {{ $notifications->links('vendor.pagination.custom') }}
        </span>
    </section>
</article>
<script>
    $('.action').click((e) => {
        e.preventDefault();
        let action = e.target.getAttribute('data-action')
        let id = e.target.getAttribute('data-id')
        location.replace('/dashboard/notifications/' + id + '/' + action)
    })
</script>
@endsection
