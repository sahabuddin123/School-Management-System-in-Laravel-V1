<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="University by Sahabuddin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<title>@yield('title')</title>
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/vendor/themify-icons/themify-icons.min.css') }}">
		<link href="{{ asset('/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/assets/vendor/switchery/switchery.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/assets/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/assets/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="{{ asset('/assets/css/admin/styles.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/css/admin/plugins.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/css/themes/theme-1.css') }}" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<!-- sidebar -->
@include('layouts_educafe.sidebar')
<!-- End Sidebar -->
			<div class="app-content">
				<!-- Header -->
                @include('layouts_educafe.adminHeader')
				<!--End Sidebar  -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Educafe</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Educafe University</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						
						<!-- containt section start -->
                            @yield('content')
                        <!-- containt section end -->

					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
        @include('layouts_educafe.adminFooter')
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
        @include('layouts_educafe.setting')
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/vendor/modernizr/modernizr.js') }}"></script>
		<script src="{{ asset('/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
		<script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
		<script src="{{ asset('/vendor/switchery/switchery.min.js') }}"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{ asset('/vendor/maskedinput/jquery.maskedinput.min.js') }}"></script>
		<script src="{{ asset('/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
		<script src="{{ asset('/vendor/autosize/autosize.min.js') }}"></script>
		<script src="{{ asset('/vendor/selectFx/classie.js') }}"></script>
		<script src="{{ asset('/vendor/selectFx/selectFx.js') }}"></script>
		<script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
		<script src="{{ asset('/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
		<script src="{{ asset('/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="{{ asset('/assets/js/admin/main.js') }}"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="{{ asset('/assets/js/admin/form-elements.js') }}"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
