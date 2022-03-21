@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Lịch Chiếu
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
                                @foreach($edit_showtimes as $key => $showtimes)                                
                                <form role="form" action="{{URL::to('/update-showtimes/'.$showtimes->showtimes_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên Phim</label>
                                    <select name="showtimes_movie" class="form-control input-sm m-bot15">
                                    @foreach ($add_movie as $key => $movie)
                                        <option value="{{$movie->category_id}}">{{$movie->category_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giờ Bắt Đầu Chiếu</label>
                                    <select name="showtimes_times" class="form-control input-sm m-bot15">
                                    @foreach ($add_times as $key => $times)
                                        <option value="{{$times->times_id}}">{{$times->start_times}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                @endforeach                   
                                <button type="submit" name="add_showtimes" class="btn btn-info">Cập Nhật Lịch Chiếu</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection