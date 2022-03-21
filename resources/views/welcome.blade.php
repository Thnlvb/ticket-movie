<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="{{('public/frontend/images/favicon.ico')}}"/>
    <title>T'aime Movie | Trang Chủ</title>
	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{('public/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{('public/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{('public/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{('public/images/apple-touch-icon-57-precomposed.png')}}">
</head>

<body>
<header id="header">
		<div class="header_top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +090 1306 2013</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> taime@bighitcorp.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--header-top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left"><!--logo trang chủ-->
							<a href="{{URL::to('/trang-chu')}}"><img with="500px" height="50px" src="{{('public/frontend/images/logo.png')}}"> </a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{URL::to('/show-tickets')}}"><i class="fa fa-shopping-cart"></i>Đặt Vé</a></li>

								<?php
									$customer_id = Session::get('customer_id');
									if($customer_id!=NULL){			
								?>
								<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>Thanh Toán</a></li>
								<?php
								}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>Thanh Toán</a></li>								
								<?php
								}
								?>
								

								<?php
									$customer_id = Session::get('customer_id');
									if($customer_id!=NULL){			
								?>
								<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>Đăng Xuất</a></li>
								<?php
								}else{
								?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>Đăng Nhập</a></li>								
								<?php
								}
								?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse"> <!-- thu gọn thanh điều hướng -->
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
								
								<li class="dropdown"><a href="#">Phim<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    	<!-- <li><a href="{{URL::to('/movie-schedule')}}">Lịch Chiếu Phim</a></li> -->
                                        <li><a href="{{URL::to('/movie-playing')}}">Phim Đang Chiếu</a></li>
										<li><a href="{{URL::to('/movie-coming')}}">Phim Sắp Chiếu</a></li> 							 
                                    </ul>
                                </li>
							</ul>
						</div>
					</div>

					<div class="col-sm-4">
						<form action="{{URL::to('/search')}}" method="post">
							{{csrf_field()}}
						<div class="search_box pull-right">
							<input type="text" name="keys" placeholder="Tìm kiếm"/>
							<a><i class="fa fa-search"></i></a>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--header-bottom-->
	</header><!--header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel"> <!-- băng chuyền -->
						<ol class="carousel-indicators"> <!-- chỉ số băng chuyền -->
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner"> <!--các slide ảnh -->
							<div class="item active">
								<div class="col-lg-11"> <!-- slide quảng cáo 1 -->
									<img src="{{'public/frontend/images/banner3.jpg'}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-lg-11"> <!-- slide quảng cáo 2 -->
									<img src="{{'public/frontend/images/banner.jpg'}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-lg-11"> <!-- slide quảng cáo 3 -->
									<img src="{{'public/frontend/images/banner2.jpg'}}" class="girl img-responsive" alt="" />
								</div>
							</div>

													
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i> <!-- thanh điều hướng Prev -->
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i> <!-- thanh điều hướng Next -->
						</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{('public/frontend/images/banner4.jpg')}}" alt="" />
						</div><!--/shipping-->	
						<div class="shipping text-center"><!--shipping-->
							<img src="{{('public/frontend/images/banner5.jpg')}}" alt="" />
						</div><!--/shipping-->			
					</div>
				</div>
				
			<div class="col-sm-9 padding-right">
				@yield('content')
			</div>
		</div>
	</section>
	
	<footer id="footer">		
		<div class="footer-widget">
			<div class="container">
				<div class="row">					
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>T'aime Việt Nam</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Giới Thiệu</a></li>
								<li><a href="#">Tuyển Dụng</a></li>
								<li><a href="#">Liên Hệ Quảng Cáo</a></li>
								<li><a href="#">
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>Điều Khoản Sử Dụng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều Khoản Chung</a></li>
								<li><a href="#">Điều Khoản Giao Dịch</a></li>
								<li><a href="#">Chính Sách Thanh Toán</a></li>
								<li><a href="#">Chính Sách Bảo Mật</a></li>
								<li><a href="#">Câu Hỏi Thường Gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Liên Hệ</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Nhập Email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận thông tin quảng cáo từ chúng tôi. <br /></p>
							</form>
						</div>
					</div>				
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 Bighit Corporation. All rights reserved.</p>
				</div>
			</div>
		</div>		
	</footer><!--Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontedn/js/main.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        // $('.add_tickets').click(function() {
        //     var times = $('.times').val();
        //     var chair = $.('chair').val();
        // });
        $('.choose').on('change',function(){
        	var action = $(this).attr('id');
        	//lấy id đã "choose", cụ thể là lấy id="times"
        	var idtimes = $(this).val();
        	var _token = $('input[name="_token"]').val();
        	var $result = '';
        	// alert(action);
        	// alert(idtimes);
        	// alert(_token);
        	if (action = 'times'){
        		result = 'chair';
        	}
        	$.ajax({
        		url: "{{url('/select-tickets')}}",
        		method: 'post',
        		data:{action:action, idtimes:idtimes, _token:_token}, 
        		success:function(data){
        			$('#'+result).html(data);
        		}
        	});
        });
    })
</script>

</body>
</html>