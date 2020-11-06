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
    <h2>Users list</h2>
    <table>
        <tr>
            <th>#</th>
            <th class="avatar">avatar</th>
            <th>name</th>
            <th class="age">age</th>
            <th>email</th>
            <th class="telephone">telephone</th>
            <th>role</th>
            <th class="posts">posts</th>
            <th class="verified">verified</th>
            <th>actions</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td data-label="id">{{ $user -> id }}</td>
                <td data-label="avatar" class="avatar"><img src="{{ $user -> avatar }}" alt=""></td>
                <td data-label="name">{{ $user -> name }}</td>
                <td data-label="age" class="age">@if ($user -> age) {{ $user -> age }} @else <span class="unknown">-</span> @endif</td>
                <td data-label="email">{{ $user -> email }}</td>
                <td data-label="telephone" class="telephone">@if ($user -> telephone) {{ $user -> telephone }} @else <span class="unknown">unknown</span> @endif</td>
                <td data-label="role">{{ $user -> role }}</td>
                <td class="posts">
                    @if ($user -> role == 'Reader')
                        <span class="unknown">n/a</span
                    @else
                        {{ count($user -> posts) }}
                    @endif
                </td>
                <td data-label="verified" class="verified">@if ($user -> email_verified_at) True @else <span class="unknown">False</span> @endif</td>
                <td data-label="actions">
                    <a href="{{ url('/profile/'.$user -> id) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ url('/profile/'.$user -> id.'/edit') }}">
                        <i class="fas fa-pen-square"></i>
                    </a>
                    <a href="{{ url('/profile/'.$user -> id.'/delete') }}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <span class="pagination">
        {{ $users->links('vendor.pagination.custom') }}
    </span>
</section>
</article>
@endsection
