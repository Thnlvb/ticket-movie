@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Phim Sắp Chiếu</h2>
						@foreach($all_movie as $key => $movie)
						<a href="{{URL::to('/chi-tiet-phim/'.$movie->category_id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper"> 
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to('public/upload/movie/'.$movie->category_img)}}" alt="" />
											<h2>{{$movie->category_name}}</h2>
											@if ($movie->category_old == NULL)
												<p>Chưa Kiểm Duyệt </p>
											@else
												<p>Dành Cho Khán Giả Từ {{$movie->category_old}} Tuổi Trở Lên</p>
											@endif
											<a href="{{URL::to('/chi-tiet-phim/'.$movie->category_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Đặt Vé</a>
										</div>										
								</div>								
							</div>
						</div>
						</a>
						@endforeach
					</div>				
@endsection