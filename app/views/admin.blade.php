@extends('layout-admin')
@section('content')
<nav>
    <h2 class="subheader">This is the admin panel. Get cracking! </h2>
    <ul class="button-group">
        <li><a class="button" href="{{ action('AdminController@handleCreate')}}"
            method="post" role="form") }}">Create</a></li>
        {{}}
        <li><a class="button" href="{{ URL::to('about') }}">Update</a></li>
        <li><a class="button" href="{{ URL::to('portfolio') }}">Delete</a></li>
    </ul>
    <h3 class="subheader">List of Blog Posts</h3>
</nav>
@stop