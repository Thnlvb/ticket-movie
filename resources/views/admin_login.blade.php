<!DOCTYPE html>
<head>
	<title>Trang quản lý Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}">
	<link rel='stylesheet' href="{{asset('public/backend/css/style.css')}}" type='text/css'>
	<link rel="stylesheet" href="{{asset('public/backend/css/style-responsive.css')}}">
	<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('public/backend/css/font-awesome.css')}}">
	
	<script type="application/x-javascript"> 
		addEventListener("load", function() { 
			setTimeout(hideURLbar, 0); 
		}, false); 

		function hideURLbar(){ 0
			window.scrollTo(0,1); 
		} 
	</script>
 </head>
	
<body>
	<div class="log-w3">
		<div class="w3layouts-main">
			<h2>Đăng Nhập</h2>
			<?php
				$message = Session::get('message'); //Gán câu lệnh thông báo đăng nhập không thành công
				if ($message){ 
					echo '<span class="text-alert">',$message,'</span>';
					Session::put('message', null);
					// chỉ in 1 lần nếu tồn tại mesage
				}
			?>
			<form action="{{URL::to('/admin-dashboard')}}" method="post">
				{{csrf_field()}} <!-- Sinh ra một trường token ngẫu nhiên có tính năng bảo mật hơn -->
				<input type="email" class="ggg" name="admin_email" placeholder="Nhập Email" required="">
				<input type="password" class="ggg" name="admin_password" placeholder="Nhập Password" required="">
				<span><input type="checkbox">Nhớ Đăng Nhập</span>
				<h6><a href="#">Quên Mật Khẩu?</a></h6>
					<div class="clearfix"></div>
					<input type="submit" value="Đăng Nhập" name="login">
			</form>
		</div>
	</div>

<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
