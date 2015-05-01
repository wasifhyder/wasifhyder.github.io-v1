@extends('layout')
@section('content')
<section>
    <h2>Drop me a Line</h2>
    <p>
        You can contact me through this contact form or you can just hover your mouse around these beautiful icons that I did not make and find the relevant social media thingy. Your choice bro.
    </p>

    {{ Form::open(array('url'=>'contact', 'method'=>'post')) }}
    <div class="left">
        {{ Form::text('name', '', array('placeholder'=>'Name...')) }}
        <br />
        {{ Form::email('email', '', array('placeholder'=>'Email...')) }}
        <br />
        {{ Form::text('subject', '',array('placeholder'=>'Subject...')) }}
        <br />
        {{ Form::submit('Submit', array('class'=>'button tiny alert', 'style'=>'width:117px')) }}
    </div>
    <div>
        {{ Form::textarea('message', '', array('placeholder'=>'Enter your name...')) }}
    </div>


    {{ Form::close()}}


</section>
@stop