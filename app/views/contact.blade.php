@extends('layout')

@section('title')
	Contact Us!
@stop

@section('content')
	<h1>Contact Us!</h1>

	{{ Form::open(array(	 
		'url' => 'our/target/route',
		'method' => 'GET'
	))}}

	{{ Form::label('name', 'Name: ') }}
	{{ Form::text('name') }}
	{{ Form::label('email', 'Email:') }}
	{{ Form::email('email') }}
	<br/>
	{{ Form::label('comments', 'Questions/Comments: ') }}
	{{ Form::textarea('comments') }}

	{{ Form::Submit('Submit') }}

	{{Form::close()}}

@stop