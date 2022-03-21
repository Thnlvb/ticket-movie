@extends ('admin_layout')
@section ('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Sách Thời Gian
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <button class="btn btn-sm btn-default"><a href="{{URL::to('/add-times')}}">Thêm Thời Gian Mới</a></button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          Tìm kiếm
          <form action="{{URL::to('/search-times')}}" method="post">
              {{csrf_field()}}
          <input type="text" class="input-sm form-control" name="key_times" placeholder="Tìm kiếm">
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
            <th>Thời Gian</th>
            <th>Ngày</th>
            <th>Trạng Thái</th>
            <th>Thay Đổi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($all_movie_times as $key => $times_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$times_pro -> start_times}}</td>
            <td>{{$times_pro -> day_times}}</td>
            <td><span class="text-ellipsis">
                <?php
                    if ($times_pro -> times_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-times/'.$times_pro -> times_id)}}"><span class="fa fa-thumbs-down fa-thumbs-styling"></span>
                        <!-- /unactive-times/'.$times_pro -> times_id: Dẫn đến id của phim được lấy từ csdl -->
                    </a>
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-times/'.$times_pro -> times_id)}}"><span class="fa fa-thumbs-up fa-thumbs-styling"></span></a>
                    <?php
                    }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-times/'.$times_pro -> times_id)}}" class="active styling1" ui-toggle-class="">
                <!-- edit tên phim cần phải có id -->
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick = "return confirm('Bạn muốn xóa thời gian này?')" href="{{URL::to('/delete-times/'.$times_pro -> times_id)}}" class="active styling1" ui-toggle-class="">  
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
       <span>{!!$all_movie_times->render()!!}</span>
    </div>

  </div>
</div>
@endsection