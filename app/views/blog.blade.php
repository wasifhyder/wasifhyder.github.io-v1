@extends('layout')
@section('content')
<section class="blogContent">
@if ($posts)
	@foreach ($posts as $post)
	    <article>
	        <h1 class="editee">{{$post->title}}</h1>
	        <p class="editee">{{$post->content}}</p>
	    </article>
	@endforeach
@else 
	<p>No posts have been entered. You can change this by going to /admin from the root directory.</p>
</section>
@endif
@stop