@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Loại Ghế
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
                                @foreach($edit_types as $key => $types)                                
                                <form role="form" action="{{URL::to('/update-types/'.$types->types_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Loại Ghế</label>
                                    <input type="text" name="types_name" value="{{$types->types_name}}" class="form-control" id="exampleInputEmail1">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phụ Thu</label>
                                    <input type="text" name="types_surcharge" value="{{$types->types_surcharge}}" class="form-control" id="exampleInputEmail1">
                                </div>                                              
                                @endforeach                   
                                <button type="submit" name="add_types" class="btn btn-info">Cập Nhật Loại Ghế</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection