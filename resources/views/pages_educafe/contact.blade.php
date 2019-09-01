@extends('layouts_educafe.master')
@section('title', ' Contact | Educafe ')
@section('content')
<!-- start contact banner section -->
<section class="teacher-banner">
			<div class="container  pt-5">
				<h2 class="text-light text-center">CONTACT US</h2>
					<ul class="d-flex justify-content-center">
						<li><a href="#">Home /</a></li>
						<li><a href="#" class="text-success">Contact</a></li>
					</ul>
			</div>
		</section>
	<!-- end contact banner section -->
	<!--start get in touch section -->
	<section class="get-in-touch">
		<div class="container my-5">
			<h3 class="text-center mb-5">Get in touch</h3>
			<div class="row">
				<div class="col-md-6 mb-sm-5 mb-5">
					<h5>Contact Details</h5>
					<p class="my-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy
					nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wi
					si enim ad minim veniam quis nostrud exerci tation .</p>
					<ul class="custom-icon">
						<li><i class="fas fa-phone mr-3"></i>88 (3535) 564564</li>
						<li><i class="far fa-envelope mr-3"></i>educare@gmail.com</li>
						<li><i class="fas fa-fax mr-3"></i>365 - 999888</li>
						<li><i class="fas fa-hamburger mr-3"></i>www.educare.com</li>
					</ul>
				</div>
				<div class="col-md-6">
					<form action="/contactsubmit" method="get" class="form-group">
						<input type="text" name="name" placeholder="user name" class="form-control mb-3">
						<input type="email"  name="email" placeholder="email name" class="form-control mb-3">
						<input type="text" name="subject" placeholder="Subject" class="form-control mb-3">
						<textarea name="mass" id="" cols="10" rows="5" placeholder="Message here" class="form-control mb-3"></textarea>
						<div class="text-center">
						<button type="submit" class="btn btn-outline-success">Submit Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--end get in touch section -->
	<!-- start google map -->
	<section class="map">
			<div class="row res-map">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/d/embed?mid=1hjs3mIoZBblBP_CvxiP4w38STiY" width="100%" height="400px"></iframe>
				</div>
			</div>
	</section>
	<!-- end google map -->
@stop