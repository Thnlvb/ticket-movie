@extends ('admin_layout')
@section ('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Sách Khách Hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4"> 
      </div>
      <div class="col-sm-12">
        <div class="input-group">
          Tìm kiếm
          <form action="{{URL::to('/search-customer')}}" method="post">
              {{csrf_field()}}
          <input type="text" class="input-sm form-control" name="key_customer" placeholder="Tìm kiếm">
<!--             <button class="btn btn-sm btn-default" type="button">Go!</button> -->
        </form>
        </div>
      </div>
    </div>
    <div class="table-responsive">
        <?php
            $message = Session::get('message'); //Gán câu lệnh thông báo thành công
            if ($message){
                echo '<span class="text-alert">',$message,'</span>';
                Session::put('message', null);
                // chỉ in 1 lần nếu tồn tại mesage
            }
        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>STT</th>
            <th>Tên Khách Hàng</th>
            <th>Năm - Tháng - Ngày Sinh</th>
            <th>Địa Chỉ Email</th>
            <th>Số Điện Thoại</th>
            <th>Thay Đổi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($all_customer as $key => $customer)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$customer -> customer_id}}</td>
            <td>{{$customer -> customer_name}}</td>
            <td>{{$customer -> customer_old}}</td>
            <td>{{$customer -> customer_email}}</td>
            <td>{{$customer -> customer_phone}}</td>
            <td>
              <a href="{{URL::to('/edit-customer/'.$customer -> customer_id)}}" class="active styling1" ui-toggle-class="">
                <!-- edit tên phim cần phải có id -->
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick = "return confirm('Bạn muốn xóa khách hàng này?')" href="{{URL::to('/delete-customer/'.$customer -> customer_id)}}" class="active styling1" ui-toggle-class="">  
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
       <span>{!!$all_customer->render()!!}</span>
    </div>
  </div>
</div>
@endsection