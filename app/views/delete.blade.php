@extends('layout-admin')
@section('content')

	{{Form::open(array('url'=>action('AdminController@handleDelete'),'method'=>'post', 'role'=>'form'))}}
    <h2 class="subheader">Are you sure you want to delete '{{$post->title}}'?</h2>
    {{Form::hidden('post', $post->id)}}
    {{Form::submit('Yes', array('class'=>'button alert'))}}
    {{Form::close()}}
@stop