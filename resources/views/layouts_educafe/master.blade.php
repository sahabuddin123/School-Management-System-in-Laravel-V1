<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="University by Sahabuddin">
    <title>@yield('title')</title>
		<!-- bootstrap link -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
		<!-- fontawesome link -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/all.min.css') }}">
        <!-- font-awesome -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-awesome.css') }}">
		<!-- style css link -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/contact.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/teacher.css') }}">
        <!-- responsive css link -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}">
		<!-- carousel link -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.theme.default.css') }}">
        <!-- jquery js-->
        <script type="text/javascript" src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
        <!-- bootstarp js -->
		<script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <!-- owl cursul flugin js -->
        <script type="text/javascript" src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
        <!-- custom main js -->
        <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
        <!-- font awesome js -->
        <script type="text/javascript" src="{{ asset('/assets/js/all.min.js') }}"></script>
        <!-- jquery.flot -->
        <script type="text/javascript" src="{{ asset('/assets/js/jquery.flot.js') }}"></script>
        <!-- jquery-ui-1.10.1.custom.min -->
        <script type="text/javascript" src="{{ asset('/assets/js/jquery-ui-1.10.1.custom.min.js') }}"></script>
        <!-- count up js -->
		<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
		<script>
			jQuery(document).ready(function(){
			$('.counter').counterUp({
			delay: 10,
			time: 1000
			});
			});
        </script>
        <!-- scroll to top bar js -->
        <script type="text/javascript">
            $(document).ready(function(){
            $(window).scroll(function(){
            if($(this).scrollTop() > 200){
            $('.scrollToTop').fadeIn();
            }else{
            $('.scrollToTop').fadeOut();
            }
            });
            $('.scrollToTop').click(function(){
            $('html,body').animate({scrollTop: 0}, 1000)
            })
            });
        </script>
	</head>
	<body>
        <!-- header section start -->
        @include('layouts_educafe.header')
        <!-- header section End -->
            
        <!-- containt section start -->
        @yield('content')
        <!-- containt section end -->
			
        <!-- footer section start -->
        @include('layouts_educafe.footer')
        <!-- footer section End -->
         <a herf="#" class="scrollToTop"><i class="fas fa-arrow-up"></i></a>   
		</body>
	</html>