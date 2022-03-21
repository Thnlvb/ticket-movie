@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Định Dạng Phim
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
                                @foreach($edit_format as $key => $format)                                
                                <form role="form" action="{{URL::to('/update-format/'.$format->format_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Loại Phim</label>
                                    <input type="text" name="format_name" value="{{$format->format_name}}" class="form-control" id="exampleInputEmail1">
                                </div>                                           
                                @endforeach                   
                                <button type="submit" name="add_format" class="btn btn-info">Cập Nhật Loại Phim</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection