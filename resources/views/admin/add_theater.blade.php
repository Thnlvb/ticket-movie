@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Phòng Chiếu Mới
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
                                <form role="form" action="{{URL::to('/save-theater')}}" method="post">
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Phòng Chiếu</label>
                                    <input type="text" name="theater_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Phòng Chiếu">
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Số Hàng &nbsp; Số Cột</label>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <input type="text" name="theater_rows" class="form-control" placeholder=".col-lg-1">
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" name="theater_cols" class="form-control" placeholder=".col-lg-1">
                                                </div>
                                        </div>
                                </div>                                                                 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="theater_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>                                
                                <button type="submit" name="add_theater" class="btn btn-info">Thêm Phòng</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection