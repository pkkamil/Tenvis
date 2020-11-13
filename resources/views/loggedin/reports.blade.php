<?php
    $auth = True;
    $scrollTo = 'none';
    $active = '';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="users-list dashboard-part">
    <section>
        <h2 class="report-title">Reports list</h2>
    @if (count($reports) > 0)
    <table>
        <tr>
            <th>#</th>
            <th class="image">Image</th>
            <th>Type</th>
            <th>Object_id</th>
            <th>Claimant_id</th>
            <th class="claimant_name">Claimant_name</th>
            <th class="added_at">Added_at</th>
            <th>actions</th>
        </tr>
        @foreach($reports as $report)
            <tr>
                <td data-label="id">{{ $loop -> iteration }}</td>
                @if ($report -> type == 'User')
                <td data-label="Image" class="image"><img src="{{ $report -> user -> avatar }}" alt=""></td>
                @else
                <td data-label="Image" class="image"><img src="{{ $report -> post -> image }}" alt=""></td>
                @endif
                <td data-label="Type">{{ $report -> type }}</td>
                <td data-label="Object_id">{{ $report -> object_id }}</td>
                <td data-label="Claimant_id">{{ $report -> user_id }}</td>
                <td class="claimant_name" data-label="Claimant_name">{{ App\User::find($report -> user_id) -> name }}</td>
                <td class="added_at" data-label="Added_at">{{ $report -> created_at->format('d M Y')}}&nbsp;{{$report -> created_at->format('H:m:s')}}</td>
                <td data-label="actions">
                    @if ($report -> type == 'User')
                    <a href="{{ url('/profile/'.$report-> object_id) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    @else
                    <a href="{{ url('/blog/post/'.$report -> object_id) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    @endif
                    <a href="{{ url('/dashboard/reports/'.$report -> id) }}">
                        <i class="fas fa-pen-square"></i>
                    </a>
                    <a href="{{ url('/dashboard/reports/'.$report -> id.'/delete') }}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    @else
    <section class="no-found-reports">
        There are no reports with the given name in the database.
    </section>
    @endif
    <span class="pagination">
        {{ $reports->links('vendor.pagination.custom') }}
    </span>
</section>
</article>
@endsection
