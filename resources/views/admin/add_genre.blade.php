@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Loại Phim
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
                                <form role="form" action="{{URL::to('/save-genre')}}" method="post">
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Loại Phim</label>
                                    <input type="text" name="genre_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Loại Phim">
                                </div>                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng Thái</label>
                                    <select name="genre_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>                                
                                <button type="submit" name="add_category_movie" class="btn btn-info">Thêm Loại Phim</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection