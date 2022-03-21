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
                                @foreach($edit_schedule as $key => $schedule)                                
                                <form role="form" action="{{URL::to('/update-schedule/'.$schedule->schedule_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn Phim</label>
                                    <select name="schedule_movie" class="form-control input-sm m-bot15">
                                    @foreach ($edit_movie as $key => $movie)
                                        @if($movie->category_id==$schedule->schedule_movie)
                                            <option selected value="{{$movie->category_id}}">{{$movie->category_name}}</option>  
                                        @else 
                                            <option value="{{$movie->category_id}}">{{$movie->category_name}}</option>
                                        @endif    
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn Phòng</label>
                                    <select name="schedule_theater" class="form-control input-sm m-bot15">
                                    @foreach ($edit_theater as $key => $theater)
                                        @if($theater->theater_id==$schedule->schedule_theater)
                                            <option selected value="{{$theater->theater_id}}">{{$theater->theater_name}}</option>  
                                        @else 
                                            <option value="{{$theater->theater_id}}">{{$theater->theater_name}}</option>
                                        @endif    
                                    @endforeach
                                    </select>
                                </div>      
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn Giờ</label>
                                    <select name="schedule_times" class="form-control input-sm m-bot15">
                                    @foreach ($edit_times as $key => $times)
                                        @if($times->times_id==$schedule->schedule_times)
                                            <option selected value="{{$times->times_id}}">{{$times->start_times}}</option>  
                                        @else 
                                            <option value="{{$times->times_id}}">{{$times->start_times}}</option>
                                        @endif    
                                    @endforeach
                                    </select>
                                </div>                                       
                                @endforeach                   
                                <button type="submit" name="add_schedule" class="btn btn-info">Cập Nhật Lịch Chiếu</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection