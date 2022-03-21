@extends('welcome')
@section('content')

<?php
				 $content = Cart::content();
				 $count = Cart::count();  
				 // echo '<pre>';
				 // print_r($content);
				 // echo '<pre>';
				 ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
				  <li class="active">Đặt Vé</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Tên Phim</td>
							<td class="description">Ghế</td>
							<td class="price">Giá</td>
							<!-- <td class="quantity">Số Vé</td> -->
							<td class="total">Phụ Thu</td>
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
							<td class="cart_description">
								<h4><a href="">{{$value_content->options->chair}}</a></h4>
								<p></p>
							</td>
							<td class="cart_price">
								<p>{{number_format($value_content->options->price).' VNĐ'}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($value_content->options->surcharge).' VNĐ'}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-tickets/'.$value_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Vé Của Bạn</h3>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Số Vé <span>{{$count}}</span></li>
							<li>Thành Tiền <span>{{Cart::total().' VNĐ'}}</span></li>
						</ul>
						<?php
									$customer_id = Session::get('customer_id');
									// $customer_age = Session::get('customer_age');
									if($customer_id!=NULL){			
								?>
								<a class="btn btn-default check_out" href="{{URL::to('/payment')}}">Thanh Toán</a>
								<?php
								}else{
								?>						
								<a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh Toán</a>		
								<?php
								}
								?>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	</form>
@endsection