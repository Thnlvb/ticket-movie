@extends ('admin_layout')
@section ('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông Tin Khách Hàng
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
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$ticket_customer->customer_name}}</td>
            <td>{{$ticket_customer->customer_phone}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br>
<br><br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông Tin Khách Hàng
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
            <th>Tên Phim</th>
            <th>Phòng Chiếu</th>
            <th>Vị Trí Ghế</th>
            <th>Đơn Giá</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ticket as $key => $tickets)
          <tr>
            <td>{{$tickets->category_name}}</td>
            <td>{{$tickets->theater_name}}</td>
            <td>{{$tickets->chair_name}}</td>
            <td>{{$tickets->details_total}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>

@endsection