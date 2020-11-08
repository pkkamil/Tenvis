<?php
    $auth = True;
    $scrollTo = 'none';
    $active = 'notifications';
    $headerClass = 'dashboard';
?>

@extends('layouts.master')
@section('content')
<article class="notifications dashboard-part">
    {{$notifications}}
</article>
@endsection
