@extends('welcome')
@section('content')
@foreach($movie_detail as $key => $values)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('/public/upload/movie/'.$values->category_img)}}" alt="" />				
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="/public/frontend/images/new.jpg" class="newarrival" alt="" />
								<h2><font color="red">{{$values->category_name}} </font></h2>						
								<?php
									if ($values->category_status==1){
										if ($values->category_old!=0){
								?>
										<p> Dành cho khán giả từ {{$values->category_old}} tuổi trở lên </p>
									<?php
										}else{
									?>
										<p>Dành cho mọi lứa tuổi</p>
										<?php
										}
									?>
										<form action="{{URL::to('/tickets-book')}}" method="post">
									{{csrf_field()}}
								<span>
									<input name="qty" type="number" min="1" max="1" value="1"/>
									<div class="form-group">
	                                    <label for="exampleInputPassword1">Chọn Suất Chiếu</label>
	                                    <select name="times" id="times" class="form-control input-sm m-bot15 choose times">
	                                    	<option value="">--Chọn Suất Chiếu--</option>
	                                    @foreach ($schedule as $key => $times)	
	                                        <option value="{{$times->schedule_times}}">{{$times->start_times}}</option>
	                                    @endforeach
	                                    </select>
                               	 	</div>
                               	 	<!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Vị Trí Hàng</label>
                                    <input type="text" name="chair_row" class="form-control" id="exampleInputEmail1">
                                </div> -->
                                <div class="form-group">
	                                    <label for="exampleInputPassword1">Chọn Vị Trí Ghế</label>
	                                    <select name="chair" id="chair" class="form-control input-sm m-bot15 chair">
	                                    	<option value="">--Chọn Vị Trí Ghế--</option>
	                                    @foreach ($chair as $key => $c)
	                                        <option value="{{$c->chair_id}}">{{$c->chair_name}}</option>
	                                    @endforeach
	                                    </select>
                               	</div>
									<input name="movie" type="hidden" value="{{$values->category_id}}"/>
									<button type="submit" class="btn btn-fefault cart add_tickets" name="add_tickets">
										<i class="fa fa-shopping-cart"></i>
										Đặt Vé
									</button>
								</span>
								</form>
								<?php
									}else{
								?>
										<p> Phim hiện chưa khởi chiếu. Vui lòng quay lại sau. </p>
								<?php
									}
								?>

								<p><b>Trạng Thái: </b>
									<?php
										if ($values->category_status==0){
											echo 'Dừng Chiếu/Sắp Chiếu';	
										}else{
											echo 'Đang Chiếu';
										}
									?></p>
								<p><b>Thể Loại: </b>{{$values->genre_name}}</p>
								<p><b>Định Dạng: </b>{{$values->format_name}}</p>								
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Chi Tiết</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Mô Tả</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" ><!--chi tiết-->
								<h2> Tên Phim: <font color="red">{{$values->category_name}} </font></h2>
								<p><b>Quốc Gia: </b>{{$values->category_country}}</p>
								<p><b>Đạo Diễn: </b>{{$values->category_directors}}</p>
								<p><b>Diễn Viên: </b>{{$values->category_cast}}</p>
								<p><b>Thể Loại: </b>{{$values->genre_name}}</p>
								<p><b>Định Dạng: </b>{{$values->format_name}}</p>
								<p><b>Ngày Khởi Chiếu: </b>{{$values->category_date}}</p>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" ><!--mô tả-->
								<p>{{$values->category_desc}}.</p>
							</div>						
						</div>
</div><!--/category-tab-->
@endforeach
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">PHIM ĐỀ XUẤT</h2>						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								@foreach ($movie_rcm as $key => $vl)	
								<a href="{{URL::to('/chi-tiet-phim/'.$vl->category_id)}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{URL::to('public/upload/movie/'.$vl->category_img)}}" alt="" />
														<h2>{{$vl->category_name}}</h2>
														@if ($vl->category_old == 0)
														<p>Dành Cho Mọi Lứa Tuổi </p>
														@else
														<p>Dành Cho Khán Giả Từ {{$vl->category_old}} Tuổi Trở Lên</p>
														@endif
														<a href="{{URL::to('/chi-tiet-phim/'.$vl->category_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Đặt Vé</a>
													</div>										
												</div>
											</div>
										</div>
									</div>
								@endforeach	
								</div>
							</div>		
						</div>
					</div><!--/recommended_items-->
@endsection