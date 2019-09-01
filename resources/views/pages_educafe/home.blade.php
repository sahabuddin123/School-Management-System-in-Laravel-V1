@extends('layouts_educafe.master')
@section('title', ' Home | Educafe ')
@section('content')
<!-- slider start -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" auto-play="true">
				<div class="carousel-inner">
				<div class="carousel-item active silder">
						<img src="{{ asset('/assets/img/slider_img.jpg') }}" class="d-block w-100 motaleb"  alt="">
						<div class="motaleb-re">
							<h1>Take the first step to<br>
							<span style="color: green">knowledge</span> with us</h1>
							<p class="font-custom">Claritas est etiam processus dynamicus, qui sequitur mution<br>
							constudium lectorum est notare quam littera gothica.</p>
							<button class="btn btn-success text-center custom-button">VIEW COURSES</button>
							<!-- Button trigger modal -->
			<button class="btn btn-success text-center custom-button1" data-toggle="modal" data-target="#exampleModal" >READ MORE</button>
						</div>
					</div>
					
					<div class="carousel-item silder">
						<img src="{{ asset('/assets/img/slider_img.jpg') }}" class="d-block w-100 motaleb"  alt="">
						<div class="motaleb-re">
							<h1>Take the first step to<br>
							<span style="color: green">knowledge</span> with us</h1>
							<p class="font-custom">Claritas est etiam processus dynamicus, qui sequitur mution<br>
							constudium lectorum est notare quam littera gothica.</p>
							<button class="btn btn-success text-center custom-button">VIEW COURSES</button>
							<!-- Button trigger modal -->
			<button class="btn btn-success text-center custom-button1" data-toggle="modal" data-target="#exampleModal" >READ MORE</button>
						</div>
					</div>
					<div class="carousel-item silder">
						<img src="{{ asset('/assets/img/slider_img.jpg') }}" class="d-block w-100 motaleb"  alt="">
						<div class="motaleb-re">
							<h1>Take the first step to<br>
							<span style="color: green">knowledge</span> with us</h1>
							<p class="font-custom">Claritas est etiam processus dynamicus, qui sequitur mution<br>
							constudium lectorum est notare quam littera gothica.</p>
							<button class="btn btn-success text-center custom-button">VIEW COURSES</button>
							<!-- Button trigger modal -->
			<button class="btn btn-success text-center custom-button1" data-toggle="modal" data-target="#exampleModal" >READ MORE</button>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- nav and slider section end -->
			<!-- model start -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">About Me</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
					<img src="{{ asset('/assets/img/sahab.jpg') }}" />
					<p>Name: Sahab Uddin, Roll: 284067, Reg.No.:110102, Shift: Frist.</p>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save changes</button>
					</div>
				  </div>
				</div>
			  </div>
			<!-- model end -->
			<!-- principal section start -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 mt-5 ">
						<h4 class="ml-5">Message From The Principal</h4>
						<div class="custom_principle_p">
						<p>Investigationes demonstraverun lectores legere me lius quod ii leg
							unt saepius Claritas est etiam processus dynamicus, qui sequiturm
							utationem consuetudium lectorum Mirum est notare quam litterag
							othica, quam nunc putamus parum claram, anteposuerit litterarum
							formas humanitatis per seacula quarta decima et quinta decimaEo
						dem modo typi qui nunc nobis videntur .</p>
						</div>
						<img src="{{ asset('/assets/img/sugnature.png') }}" alt="">
						<p>Principal of Educare</p>
					</div>
					<div class="col-md-6 mt-5">
						<div class="row">
							<div class="col-md-12 background-pic">
								<img src="{{ asset('/assets/img/principals Image.png') }}" height="200" width="200" class="custom-principal-image" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- principal section end -->
			<!-- courses section start -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-5">
						<h1 class="text-center">Our Popular Courses</h1>
						<p class="text-center"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet<br>
						doming id quod mazim placerat facer possim assum.</p>
					</div>
				</div>
			</div>
			<!-- card section start -->
			<section class="course">
				<div class="container">
					<div class="row">
						<div class="owl-carousel owl-theme">
						@foreach($couress as $row)
						<div class="custom_cards">
							<div class="card" >
								<img class="card-img-top" src="assets/img/{{$row->imagename}}" alt="">
								<div class="card-body" style="height:205px;overflow:hidden; margin-bottom:20px;">
									<h5 class="card-title text-center"
									style="color: #000">{{$row->ctitle}}</h5>
									<p class="text-center">by__ <span style="color: green;">{{$row->courseby}}</p>
									<p class="card-text text-center" style="color: #000;">{{$row->cditels}}</p>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="left">
											<p><i class="fas fa-user"></i> {{$row->cts}}</p>
										</div>
										<div class="main">
										@php
                                        $id=$row->cid;
                                        @endphp
                                            <p> <a href="/showdeatils/{{$id}}"><span>Apply Now<span></a> </p>
										</div>
										<div class="right">
											<p>{{$row->cta}}</p>
										</div>
									</div>
								</div>
							</div>
							</div>
							@endforeach
						</div>
						<div class="col-md-12 text-center mt-5 ">
							<a href="/courses1" class="text-center text-black brouse-course">BROWSE ALL COURSES</a></
						</div>
					</div>
				</div>
			</section>
			<!-- card section end -->
			<!-- courses section end -->
			<!-- fact section start -->
			
			<section class="fact">
				<div class="bac-pic mt-5">
					<div class="container">
						<div class="content-box">
							<div class="row text-center">
								<div class="col-md-4">
									<div class="stat-items">
										<h1>Important Facts</h1>
										<p style="text-align: left;">Nam liber tempor cum soluta nobis eleifend option
										doming id quod mazim facer possim assum.</p>
										<a href="/contact" style="text-align: left;"><button style="height: 40px; width: 150px; border:none;">CONTACT US</button></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="stat-items">
										<h2><i class="fas fa-user-graduate"></i></h2>
										<h2><span class="counter text-center">300</span><span>+</span>
										</h2>
										<p>STUDENT</p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="stat-items">
										<h2><i class="fab fa-android"></i></h2>
										<h2><span class="counter text-center">1500</span><span>+</span>
										</h2>
										<p>ANDROID USER</p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="stat-items">
										<h2><i class="fas fa-book"></i></h2>
										<h2><span class="counter text-center">6</span><span>+</span>
										</h2>
										<p>TECHNOLOGY</p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="stat-items">
										<h2><i class="fa fa-male"></i></h2>
										<h2><span class="counter text-center">4</span><span>+</span>
										</h2>
										<p>TEACHER</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- fact section end -->
			<!-- news section start
			<div class="container">
				<div class="news-head">
					<h2 class="text-black text-center mt-5">Recent News</h2>
					<p class="text-center"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet<br>
					doming id quod mazim placerat facer possim assum.</p>
				</div>
				<div class="row">
					<div class="col-md-6 mt-5">
						<div class="card custom_news1">
							<img src="{{ asset('/assets/img/class1.png') }}" class="card-img" alt="...">
							<div class="card-body ">
								<h6 class="card-title font-weight-bold">InterAmerican Campus Open House</h6>
								<p>By <span style="color: green">Rechard Jones</span><br>17 Oct 2016 | <i class="fas fa-gift"></i>75</p>
								<p class="card-text">Vel illum dolore eu feugiat nulla fa Vel illum dolore eu feugiat nulla fa<br>
								at vero eros et acsan et iusto. at vero eros et acsan et iusto.</p>
								<a href="#">READ MORE <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card custom_news mb-2 mt-5">
							<div class="row no-gutters">
								<div class="col-md-4">
									<img src="{{ asset('/assets/img/class2.png') }}" class="card-img" height="215" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body custom_news_body">
										<h6 class="card-title font-weight-bold mt-3">InterAmerican Campus Open House</h6>
										<p>By <span style="color: green">Rechard Jones</span><br>17 Oct 2016 | <i class="fas fa-gift"></i>75</p>
										<p class="card-text">Vel illum dolore eu feugiat nulla fa Vel illum dolore eu feugiat nulla fa<br>
										at vero eros et acsan et iusto. at vero eros et acsan et iusto.</p>
										<a href="#">READ MORE <i class="fas fa-long-arrow-alt-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card custom_news mb-3 mt-4">
							<div class="row no-gutters">
								<div class="col-md-4">
									<img src="{{ asset('/assets/img/class3.png') }}" class="card-img" height="215" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body custom_news_body">
										<h6 class="card-title font-weight-bold mt-3">InterAmerican Campus Open House</h6>
										<p>By <span style="color: green">Rechard Jones</span><br>17 Oct 2016 | <i class="fas fa-gift"></i>75</p>
										<p class="card-text">Vel illum dolore eu feugiat nulla fa Vel illum dolore eu feugiat nulla fa<br>
										at vero eros et acsan et iusto. at vero eros et acsan et iusto.</p>
										<a href="#">READ MORE <i class="fas fa-long-arrow-alt-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 mt-5 text-center">
						<a href="#" class=" custom-news">BROUSE ALL NEWS</a>
					</div>
				</div>
				<br><br> -->
				<!-- news section end -->
				<!-- student says section start -->
				<div class="student">
					<div class="contaner">
						<div class="student-says mt-5">
							<h2 class="text-center">What Student Says?</h2>
							<p class="text-center">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet<br>
							doming id quod mazim placerat facer possim assum.</p>
						</div>
						<div class="row mt-5">
							<div class="col-md-3 mt-5 first-comment1">
								<img src="{{ asset('/assets/img/first_man.png') }}" class="custom-img-comment">
								<p class="mt-3 custom_say_p">Nam liber tempor cum soluta nobis eleif
									end option congue nihil impediet doming
									id quod mazim placerat facer possim ass
								um. Typi non habent claritatem.</p>
								<h6 class="custom_say_h6">Rubel Hossen</h6>
								<p class="custom_say_p">Department of management</p>
							</div>
							<div class="col-md-3 mt-5  first-comment">
								<img src="{{ asset('/assets/img/first_man.png') }}" class="custom-img-comment">
								<p class="mt-3 custom_say_p">Nam liber tempor cum soluta nobis eleif
									end option congue nihil impediet doming
									id quod mazim placerat facer possim ass
								um. Typi non habent claritatem.</p>
								<h6 class="custom_say_h6">Rubel Hossen</h6>
								<p class="custom_say_p">Department of management</p>
							</div>
							<div class="col-md-3 mt-5 first-comment">
								<img src="{{ asset('/assets/img/first_man.png') }}" class="custom-img-comment">
								<p class="mt-3 custom_say_p">Nam liber tempor cum soluta nobis eleif
									end option congue nihil impediet doming
									id quod mazim placerat facer possim ass
								um. Typi non habent claritatem.</p>
								<h6 class="custom_say_h6">Rubel Hossen</h6>
								<p class="custom_say_p">Department of management</p>
							</div>
							
						</div><br>
					</div>
				</div></div><br>
				<!-- student says section end -->
				<!-- subscribe section start -->
				<div class="subscribe">
					<div class="container">
						<div class="row">
							<div class="col-md-6 offset-3 custom-subcribes mt-5">
								<h1 class="text-center text-white">SUBSCRIBE TO OUR NEWSLETTER</h1>
								<p class="text-center text-white">Signup to receive email updates about courses</p>
							</div>
							<div class="col-md-6 mt-3"></div>
							<form action="/subcribe" method="get">
								<input type="email" name="email" placeholder="enter mail" size="45" class="email-section">
								<button type="submit" class="masage"><i class="fas fa-user"></i></button>
							</form>
						</div>
					</div><br>

				</div>			</div>
@stop