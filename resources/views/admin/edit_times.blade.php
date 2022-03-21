@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Thời Gian
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
                                @foreach($edit_times as $key => $times)                                
                                <form role="form" action="{{URL::to('/update-times/'.$times->times_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời Gian</label>
                                    <input type="time" name="times_start" value="{{$times->start_times}}" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày</label>
                                    <input type="date" name="times_day" value="{{$times->day_times}}" class="form-control" id="exampleInputEmail1">
                                </div>                                             
                                @endforeach                   
                                <button type="submit" name="add_times" class="btn btn-info">Cập Nhật Thời Gian</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection