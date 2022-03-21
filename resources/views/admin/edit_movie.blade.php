@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Phim
                        </header>
                        <div class="panel-body">
                            <?php
                                $message = Session::get('message'); //Gán câu lệnh thông báo thành công
                                if ($message){
                                    echo '<span class="text-alert">',$message,'</span>';
                                    Session::put('message', null);
                                    // chỉ in 1 lần nếu tồn tại mesage
                                }
                            ?>
                            <div class="position-center">
                                @foreach($edit_category_movie as $key => $pro) 
                                <form role="form" action="{{URL::to('/update-category-movie/'.$pro->category_id)}}" method="post" enctype="multipart/form-data">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Phim</label>
                                    <input type="text" name="category_movie_name" class="form-control" id="exampleInputEmail1" value="{{$pro->category_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời lượng</label>
                                    <input type="text" name="category_movie_time" class="form-control" value="{{$pro->category_time}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Độ Tuổi Giới Hạn</label>
                                    <input type="text" name="category_movie_old" class="form-control" value="{{$pro->category_old}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Khởi Chiếu</label>
                                    <input type="text" name="category_movie_date" class="form-control" value="{{$pro->category_date}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quốc Gia</label>
                                    <input type="text" name="category_movie_country" class="form-control" value="{{$pro->category_country}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Đạo Diễn</label>
                                    <input type="text" name="category_movie_directors" class="form-control" value="{{$pro->category_directors}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Diễn Viên</label>
                                    <input type="text" name="category_movie_cast" class="form-control" value="{{$pro->category_cast}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh</label>
                                    <input type="file" name="category_movie_image" class="form-control">
                                    <img src="{{URL::to('public/upload/movie/'.$pro->category_img)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Phim</label>
                                    <textarea class="form-control" name="category_movie_desc" style="resize:none" rows="5" id="exampleInputPassword1">{{$pro->category_desc}}</textarea>
                                     <!-- style="resize:none" : Không cho phép kéo rộng ra -->
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại Phim</label>
                                    <select name="genre" class="form-control input-sm m-bot15">
                                    @foreach ($movie_genre as $key => $genre)
                                        @if($genre->genre_id==$pro->movie_genre)
                                            <option selected value="{{$genre->genre_id}}">{{$genre->genre_name}}</option>  
                                        @else 
                                            <option value="{{$genre->genre_id}}">{{$genre->genre_name}}</option>
                                        @endif    
                                    @endforeach
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Định Dạng Phim</label>
                                    <select name="format" class="form-control input-sm m-bot15">
                                    @foreach ($movie_format as $key => $format)
                                        @if($format->format_id==$pro->movie_format)
                                            <option selected value="{{$format->format_id}}">{{$format->format_name}}</option>  
                                        @else 
                                            <option value="{{$genre->genre_id}}">{{$format->format_name}}</option>
                                        @endif    
                                    @endforeach
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Tiền</label>
                                    <input type="text" name="category_movie_price" class="form-control" value="{{$pro->category_price}}">
                                </div>              
                                @endforeach                   
                                <button type="submit" name="add_category_movie" class="btn btn-info">Cập Nhật Phim</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection