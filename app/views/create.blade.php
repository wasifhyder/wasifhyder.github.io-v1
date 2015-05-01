@extends('layout-admin')
@section('content')
    <h2 class = 'subheader'>Create Blog Post</h2>
    {{ Form::open(array('url'=>action('AdminController@handleCreate'), 'method'=>'post')) }}
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}


    {{ Form::label('content', 'Content')}}
    {{ Form::textarea('content', '',array('id'=>'editor')) }}
    {{ Form::submit('Submit', array('class'=>'tiny radius secondary button')) }}
    {{ Form::close()}}




@stop