@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Thời Gian
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
                                <form role="form" action="{{URL::to('/save-times')}}" method="post">
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời Gian Bắt Đầu</label>
                                    <input type="time" name="times_start" class="form-control" id="exampleInputEmail1" placeholder="Thời Gian">
                                </div>  
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày</label>
                                    <input type="date" name="times_day" class="form-control" id="exampleInputEmail1" placeholder="Thời Gian">
                                </div>                             
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="times_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>                                
                                <button type="submit" name="add_movie_times" class="btn btn-info">Thêm Thời Gian</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection