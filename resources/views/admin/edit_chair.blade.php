@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Ghế
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
                                @foreach($edit_chair as $key => $chair)                                
                                <form role="form" action="{{URL::to('/update-chair/'.$chair->chair_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn Phòng</label>
                                    <select name="chair_theater" class="form-control input-sm m-bot15">
                                    @foreach ($chair_theater as $key => $theater)
                                        <option value="{{$theater->theater_id}}">{{$theater->theater_name}}</option>
                                    @endforeach
                                    </select>
                                </div>                                         
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị Trí Ghế</label>
                                    <input type="text" name="chair_name" value="{{$chair->chair_name}}" class="form-control" id="exampleInputEmail1">
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại Ghế</label>
                                    <select name="chair_types" class="form-control input-sm m-bot15">
                                    @foreach ($chair_types as $key => $chairr)
                                        <option value="{{$chairr->types_id}}">{{$chairr->types_name}}</option>     
                                    @endforeach
                                    </select>
                                </div>
                                @endforeach                   
                                <button type="submit" name="add_chair" class="btn btn-info">Cập Nhật Ghế</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection