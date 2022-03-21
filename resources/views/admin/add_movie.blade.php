@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Phim Mới
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
                                <form role="form" action="{{URL::to('/save-category-movie')}}" method="post" enctype="multipart/form-data">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Phim</label>
                                    <input type="text" name="category_movie_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Phim">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời lượng</label>
                                    <input type="text" name="category_movie_time" class="form-control" placeholder="Thời Lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Độ Tuổi Giới Hạn</label>
                                    <input type="text" name="category_movie_old" class="form-control" placeholder="Độ Tuổi Giới Hạn">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Khởi Chiếu</label>
                                    <input type="date" name="category_movie_date" class="form-control" placeholder="Ngày Khởi Chiếu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quốc Gia</label>
                                    <input type="text" name="category_movie_country" class="form-control" placeholder="Quốc Gia">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đạo Diễn</label>
                                    <input type="text" name="category_movie_directors" class="form-control" placeholder="Đạo Diễn">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Diễn Viên</label>
                                    <input type="text" name="category_movie_cast" class="form-control" placeholder="Diễn Viên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh</label>
                                    <input type="file" name="category_movie_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Phim</label>
                                    <textarea class="form-control" name="category_movie_desc" style="resize:none" rows="5" id="exampleInputPassword1" placeholder="Mô Tả Phim"></textarea>
                                     <!-- style="resize:none" : Không cho phép kéo rộng ra -->
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại Phim</label>
                                    <select name="genre" class="form-control input-sm m-bot15">
                                    @foreach ($movie_genre as $key => $genre)
                                        <option value="{{$genre->genre_id}}">{{$genre->genre_name}}</option>     
                                    @endforeach
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Định Dạng Phim</label>
                                    <select name="format" class="form-control input-sm m-bot15">
                                    @foreach ($movie_format as $key => $format)
                                        <option value="{{$format->format_id}}">{{$format->format_name}}</option>
                                    @endforeach
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Tiền</label>
                                    <input type="text" name="category_movie_price" class="form-control">
                                </div>           
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="category_movie_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>  
                                                   
                                <button type="submit" name="add_category_movie" class="btn btn-info">Thêm Phim</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection