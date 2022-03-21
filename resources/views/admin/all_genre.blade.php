@extends ('admin_layout')
@section ('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Danh Sách Loại Phim
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <button class="btn btn-sm btn-default"><a href="{{URL::to('/add-genre')}}">Thêm Loại Phim Mới</a></button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
       <div class="input-group">
          Tìm kiếm
          <form action="{{URL::to('/search-genre')}}" method="post">
              {{csrf_field()}}
          <input type="text" class="input-sm form-control" name="key_genre" placeholder="Tìm kiếm">
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
            <th>Tên Loại Phim</th>
            <th>Trạng Thái</th>
            <th>Thay Đổi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($all_movie_genre as $key => $genre_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$genre_pro -> genre_name}}</td>
            <td><span class="text-ellipsis">
                <?php
                    if ($genre_pro -> genre_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-genre/'.$genre_pro -> genre_id)}}"><span class="fa fa-thumbs-down fa-thumbs-styling"></span>
                        <!-- /unactive-genre/'.$genre_pro -> genre_id: Dẫn đến id của phim được lấy từ csdl -->
                    </a>
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-genre/'.$genre_pro -> genre_id)}}"><span class="fa fa-thumbs-up fa-thumbs-styling"></span></a>
                    <?php
                    }
                ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-genre/'.$genre_pro -> genre_id)}}" class="active styling1" ui-toggle-class="">
                <!-- edit tên phim cần phải có id -->
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick = "return confirm('Bạn muốn xóa loại phim này?')" href="{{URL::to('/delete-genre/'.$genre_pro -> genre_id)}}" class="active styling1" ui-toggle-class="">  
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
       <span>{!!$all_movie_genre->render()!!}</span>
    </div>
  </div>
</div>
@endsection