@extends ('admin_layout')
@section ('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Sách Loại Ghế
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <button class="btn btn-sm btn-default"><a href="{{URL::to('/add-format')}}">Thêm Loại Ghế Mới</a></button>                
      </div>
      <div class="col-sm-4">
      </div>
     <div class="col-sm-3">
        <div class="input-group">
          Tìm kiếm
          <form action="{{URL::to('/search-types')}}" method="post">
              {{csrf_field()}}
          <input type="text" class="input-sm form-control" name="key_types" placeholder="Tìm kiếm">
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
            <th>Tên Loại Ghế</th>
            <th>Phụ Thu</th>
            <th>Trạng Thái</th>
            <th>Thay Đổi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($all_chair_types as $key => $types)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$types -> types_name}}</td>
            <td>{{$types -> types_surcharge}}</td>
            <td><span class="text-ellipsis">
                <?php
                    if ($types -> types_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-types/'.$types -> types_id)}}"><span class="fa fa-thumbs-down fa-thumbs-styling"></span>
                        <!-- /unactive-format/'.$format_pro -> format_id: Dẫn đến id của phim được lấy từ csdl -->
                    </a>
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-types/'.$types -> types_id)}}"><span class="fa fa-thumbs-up fa-thumbs-styling"></span></a>
                    <?php
                    }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-types/'.$types -> types_id)}}" class="active styling1" ui-toggle-class="">
                <!-- edit tên phim cần phải có id -->
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick = "return confirm('Bạn muốn xóa loại ghế này?')" href="{{URL::to('/delete-types/'.$types -> types_id)}}" class="active styling1" ui-toggle-class="">  
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
         <span>{!!$all_chair_types->render()!!}</span>
      </table>
    </div>
  </div>
</div>
@endsection