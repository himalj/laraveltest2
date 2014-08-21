@extends('layout')

@section('content')
    <h1>Hi Himal</h1>
	<form action="/laraveltest/events/add" method="post">
		<label>Event Title</label><input name="title" id="title" type="text" />
		<label>Email</label><input name="email" id="email" type="text" />
		<input type="submit" value="Save" />
	</form>
	@foreach ($events as $event)
		<p>{{ $event->title }}</p>
	@endforeach
@stop