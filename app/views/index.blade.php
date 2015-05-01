@extends('layout-admin')
@section('content')
<section>
    <h3 class="subheader">Manage Blog Posts</h3>
    <ul class="button-group">
        <li><a class="button" href="{{ action('AdminController@create') }}">Create New Blog Post</a></li>
    </ul>
    <h3 class="subheader">List of Blog Posts</h3>
    @if ($posts->isEmpty())
        <p>Woops! there are no blog posts here!</p>
    @else
        <table border="1">
        @foreach($posts as $post)
            <tr>
                <td><h5 class="subheader">{{$post->title}}</h5></td>
                <td><a href="{{action('AdminController@edit', $post->id); }}">Edit</a></td>
                <td><a href="{{action('AdminController@delete', $post->id); }}">Delete</a></td>
            </tr>
        @endforeach
        </table>
    @endif
</section>
@stop

