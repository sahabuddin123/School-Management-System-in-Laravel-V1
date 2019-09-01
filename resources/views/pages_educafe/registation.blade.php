@extends('layouts_educafe.master')
@section('title', ' Registation | Educafe ')
@section('content')
<div class="container mt-5">
			<h1 class="text-center">Sign up Here</h1>
			<form action="userragistationdata" method="get">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 mb-5">
						<label>Name:</label>
						<input type="text" class="form-control shadow" name="name" placeholder="Enter your name">
						<label>Date Of Birth:</label>
						<input type="date" class="form-control shadow" name="dob" >
						<label>Email ID:</label>
						<input type="text" class="form-control shadow" name="email" placeholder="Enter your email">
						<label>Mobile Number:</label>
						<input type="text" class="form-control shadow" name="mobile" placeholder="your mobile number">
						<label>Password:</label>
						<input type="password" class="form-control shadow" name="password" placeholder="password"><br>
						<button type="submit" class="btn btn-primary ml-5 ">Sign Up</button>
						<a href="/UserLogin">Login</a>
					</div>
					<div class="col-md-4"></div>
				</div>
			</form>
		</div>
	</body>
@stop