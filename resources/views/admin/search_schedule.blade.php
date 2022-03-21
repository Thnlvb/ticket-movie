@extends ('admin_layout')
@section ('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Suất Chiếu Phim
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <button class="btn btn-sm btn-default"><a href="{{URL::to('/add-schedule')}}">Thêm Lịch Chiếu Mới</a></button>                 
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          Tìm kiếm
          <form action="{{URL::to('/search-schedule')}}" method="post">
              {{csrf_field()}}
          <input type="text" class="input-sm form-control" name="key_schedule" placeholder="Tìm kiếm">
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
            <th>Tên Phim</th>
            <th>Tên Phòng Chiếu</th>
            <th>Giờ Chiếu</th>
            <th>Trạng Thái</th>
            <th>Thay Đổi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($search as $key => $schedule_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$schedule_pro -> category_name}}</td>
            <td>{{$schedule_pro -> theater_name}}</td>
            <td>{{$schedule_pro -> start_times}}</td>
            <td><span class="text-ellipsis">
                <?php
                    if ($schedule_pro -> schedule_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-schedule/'.$schedule_pro -> schedule_id)}}"><span class="fa fa-thumbs-down fa-thumbs-styling"></span>
                    </a>
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-schedule/'.$schedule_pro -> schedule_id)}}"><span class="fa fa-thumbs-up fa-thumbs-styling"></span></a>
                    <?php
                    }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-schedule/'.$schedule_pro -> schedule_id)}}" class="active styling1" ui-toggle-class="">
                <!-- edit tên phim cần phải có id -->
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick = "return confirm('Bạn muốn xóa suất chiếu này?')" href="{{URL::to('/delete-schedule/'.$schedule_pro -> schedule_id)}}" class="active styling1" ui-toggle-class="">  
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection