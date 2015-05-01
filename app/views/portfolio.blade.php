@extends('layout')
@section('content')
<h2>A sample of my work</h2>
    <ul class = "group portCat">
        <li>Web Design</li>
        <li>Illustration</li>
        <li>Graphic Design</li>
    </ul>
<ul class="gallery group">
    @for ($i = 1; $i <= 8; $i++)
    <li><a href="img/{{$i}}.jpg"><img src="img/{{$i}}.jpg" width="115" height="115"/></a></li>
    @endfor
</ul>

@stop