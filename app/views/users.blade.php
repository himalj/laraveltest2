@extends('layout')

@section('content')
    <h1>Login</h1>
	<form action="users/login" method="post">
		<label>Email</label><input name="email" id="email" type="text" />
		<label>Password</label><input name="password" id="password" type="password" />
		<input type="submit" value="Go" />
	</form>
@stop