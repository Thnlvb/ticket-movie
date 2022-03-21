@extends ('admin_layout')
@section ('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Sách Ghế
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <button class="btn btn-sm btn-default"><a href="{{URL::to('/add-chair')}}">Thêm Ghế Mới</a></button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" name="key" placeholder="Tìm kiếm">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Vị Trí Ghế</th>
            <th>Loại Ghế</th>
            <th>Tên Phòng</th>
            <th>Hiển Thị</th>
            <th>Thay Đổi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($search as $key => $chair)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$chair -> chair_name}}</td>
            <td>{{$chair -> types_name}}</td>
            <td>{{$chair -> theater_name}}</td>
            <td><span class="text-ellipsis">
                <?php
                    if ($chair -> chair_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-chair/'.$chair -> chair_id)}}"><span class="fa fa-thumbs-down fa-thumbs-styling"></span>
                        <!-- /unactive-chair/'.$chair_pro -> chair_id: Dẫn đến id của phim được lấy từ csdl -->
                    </a>
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-chair/'.$chair -> chair_id)}}"><span class="fa fa-thumbs-up fa-thumbs-styling"></span></a>
                    <?php
                    }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-chair/'.$chair -> chair_id)}}" class="active styling1" ui-toggle-class="">
                <!-- edit tên phim cần phải có id -->
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick = "return confirm('Bạn muốn xóa ghế này?')" href="{{URL::to('/delete-chair/'.$chair -> chair_id)}}" class="active styling1" ui-toggle-class="">  
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