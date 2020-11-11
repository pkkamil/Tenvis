<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'users';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="users-list dashboard-part">
    <section>
        <h2>Writers Rank</h2>
        <table>
            <tr>
                <th>Rank</th>
                <th class="avatar">avatar</th>
                <th>name</th>
                <th class="age">age</th>
                <th class="posts">posts</th>
                <th>actions</th>
            </tr>
            @foreach($writers as $writer)
                @if ($loop -> iteration < 11)
                <tr>
                    <td data-label="rank">{{ $loop -> iteration }}</td>
                    <td data-label="avatar" class="avatar"><img src="{{ $writer -> avatar }}" alt=""></td>
                    <td data-label="name">{{ $writer -> name }}</td>
                    <td data-label="age" class="age">@if ($writer -> age) {{ $writer -> age }} @else <span class="unknown">-</span> @endif</td>
                    <td class="posts">{{ count($writer -> posts) }}</td>
                    <td data-label="actions">
                        <a href="{{ url('/profile/'.$writer -> id) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                        @if (Auth::user() -> role == "Admin")
                        <a href="{{ url('/profile/'.$writer -> id.'/edit') }}">
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <a href="{{ url('/profile/'.$writer -> id.'/delete') }}">
                            <i class="fas fa-trash"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @endif
            @endforeach
        </table>
        <div class="back" data-aos="fade-up" data-aos-once="true">
            <a class="back" href="{{ url('/dashboard/account') }}">Back</a>
        </div>
        {{-- <span class="pagination">
            {{ $writers->links('vendor.pagination.custom') }}
        </span> --}}
    </section>
</article>
@endsection
