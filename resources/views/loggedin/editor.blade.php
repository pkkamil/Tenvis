<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'editor';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="editor dashboard-part">
    <form action="{{ route('newTag') }}" method="POST">
        @csrf
        <h2>Create a new tag</h2>
        <span class="tag-span">
            <label for="newTag">New Tag:</label>
            <input type="text" name="newTag" id="newTag">
            <button type="submit">Create</button>
        </span>
    </form>
    <form action="{{ route('createPost') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <section class="left-part">
            <h2>Creating a new post</h2>
            <label class="bk" for="title">Title:</label>
            <input type="text" name="title" id="title">
            <span class="tag-span">
            <label for="tag">Tag:</label>
            <select name="tag" id="tags">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            </span>
            <span class="file-span">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image">
            </span>
            <span class="file-span">
                <label for="divider">Divider:</label>
                <input type="file" name="divider" id="divider">
                </span>
        </section>
        <section class="right-part">
            <label class="bk" for="content">Content:</label>
            <textarea name="content" id="content"></textarea>
            <button type="submit">Create</button>
        </section>
        @if ($errors->all())
        <section style="color: #FFF;">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </section>
        @endif
    </form>
</article>
@endsection
