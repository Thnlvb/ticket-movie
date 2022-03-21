@extends('welcome')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng Nhập</h2>
						<form action="{{URL::to('/login-customer')}}" method="post">
							{{csrf_field()}}
							<input type="text" name="email" placeholder="Tài Khoản" />
							<input type="password" name="password" placeholder="Mật Khẩu" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi Nhớ
							</span>
							<button type="submit" class="btn btn-default">Đăng Nhập</button>
						</form>
					</div><!--/login form--> 
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng Ký (Chưa Có Tài Khoản)</h2>
							<?php
								$message = Session::get('message'); //Gán câu lệnh thông báo
								if ($message){
									echo '<span class="text-alert" style="color:red">',$message,'</span>';
									Session::put('message', null);
									// chỉ in 1 lần nếu tồn tại mesage
								}
							?>
						<form action="{{URL::to('/add-customer')}}" method="post">
							{{csrf_field()}}
							<input type="text" name="name" placeholder="Họ & Tên"/>
							<input type="email" name="email" placeholder="Email"/>
							<input type="date" name="old1" placeholder="Ngày-Tháng-Năm Sinh"/>
							<input type="password" name="password" placeholder="Mật Khẩu"/>
							<input type="text" name="phone" placeholder="Số Điện Thoại"/>
							<button type="submit" class="btn btn-default">Đăng Ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection