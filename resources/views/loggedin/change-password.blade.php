<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'account';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="account dashboard-part change-password lrpart">
    <form class="account-settings" method="POST" action="{{ route('change-password') }}">
        <section class="left-part">
            @csrf
            <span data-aos="fade-right" data-aos-once="true">
                <label class="title-tag" for="password" @error('current_password') style="color:#a32a14!important" @enderror>Current Password:</label>
                <input id="password" type="password" name="current_password" autocomplete="current-password" required @error('current_password') class="error" @enderror>
            </span>
            <span data-aos="fade-right" data-aos-delay="500" data-aos-once="true">
                <label class="title-tag" for="password" @error('password') style="color:#a32a14!important" @enderror>New Password:</label>
                <input id="new_password" type="password" name="password" autocomplete="current-password" required minlength="8" maxlength="32" @error('password') class="error" @enderror>
            </span>
            <span data-aos="fade-right" data-aos-delay="800" data-aos-once="true">
                <label class="title-tag" for="password" @error('new_confirm_password') style="color:#a32a14!important" @enderror>Confirm new Password:</label>
                <input id="new_confirm_password" type="password" name="new_confirm_password" autocomplete="current-password" required minlength="8" maxlength="32" @error('new_confirm_password') class="error" @enderror>
            </span>
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
            <div data-aos='fade-left' data-aos-delay="800" data-aos-once="true">
                <button type="submit">Change</button>
            </div>
            <div data-aos="fade-left" data-aos-delay="1100" data-aos-once="true">
                <a href="{{ url('/dashboard/account') }}">Back</a>
            </div>
        </section>
    </section>
</article>
@endsection
