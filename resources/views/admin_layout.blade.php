<!DOCTYPE html>
<head>
<title>Quản Lý</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<link rel='stylesheet' href="{{asset('public/backend/css/style.css')}}" type='text/css'/>
<link rel="stylesheet" href="{{asset('public/backend/css/style-responsive.css')}}"/>
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('public/backend/css/font-awesome.css')}}"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->

<script type="application/x-javascript"> 
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); 
    }, false);

    function hideURLbar(){ 
    window.scrollTo(0,1); 
    } 
</script>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{('public/backend/images/admin.jpg')}}">
                <span class="username">
                    <?php
                        $name = Session::get('admin_name'); //Gán tên để hiển thị trong trang admin
                        if ($name){
                            echo $name;               
                        }
                    ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Cài Đặt</a></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i>Đăng Xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/quanly')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng Quan</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản Lý Vé</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/tickets-management')}}">Chi Tiết Vé</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Khách Hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/all-customer')}}">Danh Sách Khách Hàng</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thể Loại Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-genre')}}">Thêm Loại Phim Mới</a></li>
                        <li><a href="{{URL::to('/all-genre')}}">Danh Sách Loại Phim</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Định Dạng Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-format')}}">Thêm Định Dạng Phim Mới</a></li>
                        <li><a href="{{URL::to('/all-format')}}">Danh Sách Định Dạng Phim</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-movie')}}">Thêm Phim Mới</a></li>
                        <li><a href="{{URL::to('/all-movie')}}">Danh Sách Phim</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thời Gian Chiếu Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-times')}}">Thêm Thời Gian</a></li>
                        <li><a href="{{URL::to('/all-times')}}">Danh Sách Thời Gian</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Lịch Chiếu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-schedule')}}">Thêm Lịch Chiếu Mới</a></li>
                        <li><a href="{{URL::to('/all-schedule')}}">Danh Sách Lịch Chiếu</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Phòng Chiếu Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-theater')}}">Thêm Phòng Chiếu</a></li>
                        <li><a href="{{URL::to('/all-theater')}}">Danh Sách Phòng Chiếu</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Loại Ghế</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-types')}}">Thêm Loại Ghế</a></li>
                        <li><a href="{{URL::to('/all-types')}}">Danh Sách Loại Ghế</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Ghế</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/add-chair')}}">Thêm Ghế</a></li>
                        <li><a href="{{URL::to('/all-chair')}}">Danh Sách Ghế</a></li>
                    </ul>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">			
        @yield('admin_content')
    </section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<script type="text/javascript" src="js/monthly.js"></script>	
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>

</body>
</html>
