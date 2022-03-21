@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang Chủ</a></li>
				  <li class="active">Thanh Toán Vé</li>
				</ol>
			</div>

			<div class="review-payment">
											<?php
                        $message = Session::get('message1');
                        if ($message){
                        echo '<span class="text-alert" style="color:red"><font size="5px">',$message,'</font></span>';
                        Session::put('message1', null);   
                        }
				?>
				<h2><b>Xem Lại Vé Đặt</b></h2>
			</div>

			<div class="table-responsive cart_info">
				<?php
					$content = Cart::content();
					$count = Cart::count();  
				?>		
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Tên Phim</td>
							<td class="quantity">Số Vé</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $value_content)
						<tr>
							<td class="cart_description">
								<h4><a href="">{{$value_content->name}}</a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p>{{$count}}</p>
							</td>
							<td class="cart_price">
								<p>{{Cart::total().' VNĐ'}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-tickets/'.$value_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<form action="{{URL::to('/complete')}}" method="POST">
				{{csrf_field()}}
			<div class="payment-options">
				<h4> Chọn Hình Thức Thanh Toán </h4>
				<span>
					<label><input name = "paymentt" value = "1" type="radio"> Thanh Toán Bằng Thẻ </label>
				</span>
				<span>
					<label><input name = "paymentt" value = "2" type="radio"> Thanh Toán Khi Nhận Vé</label>
				</span>
				<span>
					<input type="submit" value="Xác Nhận" name="cf" class="btn btn-primary btn-sm">
				</span>
			</div>
			</form>
		</div>
	</section> <!--/#cart_items-->
@endsection