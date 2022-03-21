@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Lịch Chiếu Mới
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
                                <form role="form" action="{{URL::to('/save-schedule')}}" method="post">
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên Phim</label>
                                    <select name="schedule_movie" class="form-control input-sm m-bot15">
                                    @foreach ($schedule_movie as $key => $movie)
                                        <option value="{{$movie->category_id}}">{{$movie->category_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên Phòng Chiếu</label>
                                    <select name="schedule_theater" class="form-control input-sm m-bot15">
                                    @foreach ($schedule_theater as $key => $theater)
                                        <option value="{{$theater->theater_id}}">{{$theater->theater_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giờ Bắt Đầu Chiếu</label>
                                    <select name="schedule_times" class="form-control input-sm m-bot15">
                                    @foreach ($schedule_times as $key => $times)
                                        <option value="{{$times->times_id}}">{{$times->start_times}}</option>
                                    @endforeach
                                    </select>
                                </div>                                                                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="schedule_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>                                
                                <button type="submit" name="add_schedule" class="btn btn-info">Thêm Lịch Chiếu</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection