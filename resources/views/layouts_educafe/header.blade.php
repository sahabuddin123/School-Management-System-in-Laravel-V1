<!-- header section start -->
<div class="header display-disable">
			<div class="container">
				<div class="row main-row">
					<div class="col-md-7">
						<ul class="list-inline text-white mt-1">
							<li class="list-inline-item"><i class="fas fa-phone"></i> +(00) 112 233 445 56</li>
							<li class="list-inline-item"><i class="fas fa-envelope"></i> crazycafe.net@gmail.com</li>
							<li class="list-inline-item "><i class="far fa-calendar"></i> Sun-Mon (9am-4pm)</li>
						</ul>
					</div>
					<div class="col-md-2 offset-3">
						<ul class="list-inline text-white mt-1">
							<li class="list-inline-item"><a class="text-white" href="{{URL::to('/UserLogin')}}">Login</a></li> |
							<li class="list-inline-item"><a class="text-white" href="{{URL::to('/UserRagistation')}}">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="show-header">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul class="list-inline text-white mt-1">
							<li class="list-inline-item"><i class="fas fa-phone"></i> +(00) 112 233 445 56</li><br>
							<li class="list-inline-item"><i class="fas fa-envelope"></i> crazycafe.net@gmail.com</li><br>
							<li class="list-inline-item "><i class="far fa-calendar"></i> Sun-Mon (9am-4pm)</li>
							<li class="list-inline-item show-header-log"><a class="text-white " href="{{URL::to('/UserLogin')}}">Login</a> | <a class="text-white" href="{{URL::to('/UserRagistation')}}">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- header section end -->
		<!-- nav and slider section start -->
		<div class="silder-part">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="/"><img src="{{ asset('/assets/img/logo.png') }}" class="img-position" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav custom-nav offset-5">
						<li class="nav-item active">
							<a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/about1')}}">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/courses1')}}">Courses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/our_teachers')}}">Our Teachers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{URL::to('/searchadmission')}}"><i class="fas fa-shopping-cart"></i>
							<b class="label orange pull-right" style="color:#ff0000;">{{5}}</b></a>
						</li>
						
					</ul>
					<!-- <form class="form-inline my-2 my-lg-0">
																			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
																			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form> -->
				</div>
			</nav>