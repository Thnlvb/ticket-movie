@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Phòng Chiếu
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
                                @foreach($edit_theater as $key => $theater)                                
                                <form role="form" action="{{URL::to('/update-theater/'.$theater->theater_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Phòng Chiếu</label>
                                    <input type="text" name="theater_name" value="{{$theater->theater_name}}" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Số Hàng &nbsp; Số Cột</label>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <input type="text" value="{{$theater->theater_rows}}" name="theater_rows" class="form-control">
                                                </div>
                                                <div class="col-lg-1">
                                                    <input type="text" value="{{$theater->theater_cols}}" name="theater_cols" class="form-control">
                                                </div>
                                        </div>
                                </div>                                                 
                                @endforeach                   
                                <button type="submit" name="add_theater" class="btn btn-info">Cập Nhật Phòng Chiếu</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection