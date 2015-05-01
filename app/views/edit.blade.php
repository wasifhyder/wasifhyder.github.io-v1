@extends('layout-admin')
@section('content')
    <h2 class="subheader">Edit blog post!</h2>
    {{ Form::open(array(
        'url'=>action('AdminController@handleEdit'), 
        'method'=>'post')) 
    }}
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $post['title']) }}
    {{ Form::label('content', 'Blog Content')}}
    {{ Form::textarea('content', $post['content'], array('id'=>'editor')) }}
    {{ Form::hidden('post', $post->id)}}
    <br />
    {{ Form::submit('Submit', array('class' => 'tiny secondary button radius')) }}
    {{ Form::close()}}
@stop