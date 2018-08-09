@extends('layouts.login')
@section('title','Login')
@section('main')
<form method="POST">
	<div class="login-form">
		<h3>Username:</h3>
		<input type="text" name="email" placeholder="Username"/>
		@if($errors->has('email'))
		<p>{{$errors->first('email')}}</p>
		@endif
		<h3>Password:</h3>
		<input type="password" name="password" placeholder="Password"/>
		@if($errors->has('password'))
		<p>{{$errors->first('password')}}</p>
		@endif
		<br>
		<input type="checkbox" name="remember" value=""> Remember
		<br>
		<input type="submit" value="Login" class="login-button"/>
		{{csrf_field()}}
	</div>
</form>
@stop()