@extends ('admin_layout')
@section ('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Thông Tin Khách Hàng
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
                                @foreach($edit_customer as $key => $customer)                                
                                <form role="form" action="{{URL::to('/update-customer/'.$customer->customer_id)}}" method="post">
                                    <!-- thêm ảnh phải có enctype="multipart/form-data" -->
                                    {{csrf_field()}} <!-- Sinh ra một trường token có tính năng bảo mật hơn --> 
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Khách Hàng</label>
                                    <input type="text" name="customer_name" value="{{$customer->customer_name}}" class="form-control" id="exampleInputEmail1">
                                </div>  
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Năm - Tháng - Ngày Sinh</label>
                                    <input type="date" name="customer_old" value="{{$customer->customer_old}}" class="form-control" id="exampleInputEmail1">
                                </div>  
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="customer_email" value="{{$customer->customer_email}}" class="form-control" id="exampleInputEmail1">
                                </div>  
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại</label>
                                    <input type="text" name="customer_phone" value="{{$customer->customer_phone}}" class="form-control" id="exampleInputEmail1">
                                </div>                                            
                                @endforeach                   
                                <button type="submit" name="add_customer" class="btn btn-info">Cập Nhật Thông Tin Khách Hàng</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>
@endsection