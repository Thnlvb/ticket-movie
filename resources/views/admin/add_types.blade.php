@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Loại Ghế
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
                                <form role="form" action="{{URL::to('/save-types')}}" method="post">
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Loại Ghế</label>
                                    <input type="text" name="types_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Loại Ghế">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phụ Thu</label>
                                    <input type="text" name="types_surcharge" class="form-control" id="exampleInputEmail1" placeholder="Phụ Thu">
                                </div>                                                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="types_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>                                
                                <button type="submit" name="add_chair_types" class="btn btn-info">Thêm Loại Ghế</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection