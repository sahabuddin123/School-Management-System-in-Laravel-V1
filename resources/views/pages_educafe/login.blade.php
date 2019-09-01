@extends('layouts_educafe.master')
@section('title', ' Login | Educafe ')
@section('content')
<div class="cmd-cd" style="height:100vh;">

<div class="container mt-5">
			<h1 class="text-center mt-5">Login Here</h1>

			<form action="/logIncon" method="get">
				<div class="row">
					<div class="col-md-4 mt-5"></div>
					<div class="col-md-4 mb-5 mt-5">
						<label>Email ID:</label>
						<input type="email" class="form-control shadow" name="email" placeholder="Enter your email">
						<label>Password:</label>
						<input type="password" class="form-control shadow" name="password" placeholder="Enter password"><br>
						<button class="btn btn-primary ml-5">Login</button>
						<a href="#">Sign Up</a>
					</div>
					<div class="col-md-4"></div>
				</div>
			</form>
</div>
</div>
@stop