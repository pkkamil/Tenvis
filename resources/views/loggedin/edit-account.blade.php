<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'account';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part lrpart">
    <form class="account-settings" action="{{ route('editAccount') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <section class="left-part">
            <span class="image" data-aos="fade-right" data-aos-once="true">
                <label for="avatar" class="title-tag" @error('image') style="color: #a32a14" @enderror>Avatar:</label>
                <input type="file" name="avatar" id="avatar">
            </span>
            <span class="name" data-aos="fade-right" data-aos-delay="500" data-aos-once="true">
                <label for="name" class="title-tag" @error('name') style="color: #a32a14" @enderror>Name:</label>
                <input type="text" name="name" id="name" value="{{ Auth::user() -> name }}">
            </span>
            <span class="email" data-aos="fade-right" data-aos-delay="800" data-aos-once="true">
                <label for="email" class="title-tag" @error('email') style="color: #a32a14" @enderror>Email:</label>
                <input type="text" name="email" id="email" value="{{ Auth::user() -> email }}">
            </span>
            <span class="age" data-aos="fade-right" data-aos-delay="1100" data-aos-once="true">
                <label for="age" class="title-tag" @error('age') style="color: #a32a14" @enderror>Age:</label>
                <input type="number" name="age" id="age" min="1" max="123" value="{{ Auth::user() -> age }}">
            </span>
            <span class="telephone" data-aos="fade-right" data-aos-delay="1400" data-aos-once="true">
                <label for="telephone" class="title-tag" @error('telephone') style="color: #a32a14" @enderror>Telephone:</label>
                <input type="text" name="telephone" id="telephone" value="{{ Auth::user() -> telephone }}">
            </span>
            @if (Auth::user() -> role == 'Admin')
            <span class="Role" data-aos="fade-right" data-aos-delay="1700" data-aos-once="true">
                <label for="Role" class="title-tag" @error('Role') style="color: #a32a14" @enderror>Role:</label>
                <select name="role" id="role">
                    <option value="Admin" @if (Auth::user() -> role == 'Admin')selected @endif>Admin</option>
                    <option value="Writer" @if (Auth::user() -> role == 'Writer')selected @endif>Writer</option>
                    <option value="Reader" @if (Auth::user() -> role == 'Reader')selected @endif>Reader</option>
                </select>
            </span>
            @endif
            @if ($errors->all())
            <ul>
                @foreach ($errors->all() as $error)
                    <li data-aos='fade-right' data-aos-delay={{400 * $loop->iteration}}>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </section>
        <section class="right-part">
            <h2 data-aos="fade-left" data-aos-delay="500" data-aos-once="true">Actions</h2>
            <div data-aos="fade-left" data-aos-delay="800" data-aos-once="true">
                <button type="submit">Save</button>
            </div>
            <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
                <a href="{{ url('/dashboard/account') }}">Back</a>
            </div>
        </section>
    </form>
</article>
@endsection
