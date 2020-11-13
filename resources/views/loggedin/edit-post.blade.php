<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'editor';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="editor dashboard-part">
    <form action="{{ route('newTag') }}" method="POST" data-aos="fade-right">
        @csrf
        <h2>Create a new tag</h2>
        <span class="tag-span">
            <label for="name" @error('name') style="color: #a32a14" @enderror>New Tag:</label>
            <input type="text" name="name" id="name">
            <button type="submit">Create</button>
        </span>
    </form>
    <form action="{{ route('editPost') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $post -> id }}">
        <section class="left-part" data-aos="fade-right" data-aos-delay="800">
            <h2>Editing an existing post</h2>
            <label class="bk" for="title" @error('title') style="color: #a32a14" @enderror>Title:</label>
            <input type="text" name="title" id="title" value="{{ $post -> title }}">
            <span class="tag-span">
            <label for="tag">Tag:</label>
            <select name="tag" id="tags">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            </span>
            <span class="file-span">
                <label for="image" @error('image') style="color: #a32a14" @enderror>Image:</label>
                <input type="file" name="image" id="image">
            </span>
            <span class="file-span">
                <label for="divider" @error('divider') style="color: #a32a14" @enderror>Divider:</label>
                <input type="file" name="divider" id="divider">
            </span>
            <span class="private-span">
                <label for="privatePost">Private:</label>
                <input type="checkbox" name="privatePost" id="privatePost" @if ($post -> private) checked @endif>
            </span>
        </section>
        <section class="right-part">
            <div data-aos="fade-left" data-aos-delay="1200">
                <label class="bk" for="content" @error('content') style="color: #a32a14" @enderror>Content:</label>
                <textarea class="tinyMCE" name="content" id="content">{{ $post -> content }}</textarea>
                <button type="submit">Edit</button>
                @if ($errors->all())
                <section class="errors">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
                @endif
            </div>
        </section>

    </form>
</article>
@endsection
