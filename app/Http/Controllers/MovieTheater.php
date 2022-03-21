<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class MovieTheater extends Controller
{
   //kiểm tra đăng nhập dưới quyền admin   
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id){ //có đăng nhập mới có admin_id
            return Redirect::to('quanly');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    //Thêm phòng chiếu mới
    public function add_theater(){
        $this->AuthLogin();
    	return view('admin.add_theater');	
    }

    //Xem danh sách phòng chiếu
    public function all_theater(){
        $this->AuthLogin();
    	$all_movie_theater = DB::table ('tbl_movie_theater')->paginate(10);
    	$manager_movie_theater = view ('admin.all_theater')->with('all_movie_theater', $all_movie_theater);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_theater
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.all_theater',$manager_movie_theater);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Lưu phòng chiếu vào CSDL
    public function save_theater(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['theater_name'] = $request->theater_name; 
    	$data['theater_rows'] = $request->theater_rows;
    	$data['theater_cols'] = $request->theater_cols;
    	$data['theater_status'] = $request->theater_status;
    	$data['created_at'] = now();
        $data['updated_at'] = now();

    	DB::table('tbl_movie_theater')->insert($data);

    	Session::put('message','Thêm Phòng Chiếu Mới Thành Công');
    	return Redirect::to('all-theater');
    }

    //Đổi trạng thái của phòng chiếu
    public function unactive_theater ($movie_theater_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_theater')->where('theater_id',$movie_theater_id)->update(['theater_status'=>1]);
    	//Khi click vào ss theater_id với $movie_theater_id trong csdl sau đó update cột theater_status=1
    	Session::put('message','Kích Hoạt Phòng Chiếu Thành Công');
    	return Redirect::to('all-theater');
    }

    //Đổi trạng thái của phòng chiếu
    public function active_theater ($movie_theater_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_theater')->where('theater_id',$movie_theater_id)->update(['theater_status'=>0]);
    	//Khi click vào ss theater_id với $movie_theater_id trong csdl sau đó update cột theater_status=0
    	Session::put('message','Loại Bỏ Phòng Chiếu Thành Công');
    	return Redirect::to('all-theater');
    }

    //Chỉnh sửa chi tiết phòng chiếu
    public function edit_theater ($theater_id){
        $this->AuthLogin();
    	$edit_theater = DB::table ('tbl_movie_theater')->where('theater_id',$theater_id)->get();
    	$manager_movie_theater = view ('admin.edit_theater')->with('edit_theater', $edit_theater);
    	return view('admin_layout')->with('admin.edit_theater',$manager_movie_theater);
    }

    //Cập nhật sau chỉnh sửa
    public function update_theater(Request $request, $theater_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['theater_name'] = $request->theater_name;
    	$data['theater_rows'] = $request->theater_rows;
    	$data['theater_cols'] = $request->theater_cols;
        $data['updated_at'] = now();
        DB::table('tbl_movie_theater')->where('theater_id',$theater_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Phòng Chiếu Thành Công');
        return Redirect::to('all-theater');
    }

    //Xóa phòng chiếu khỏi CSDL
    public function delete_theater ($movie_theater_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_theater')->where('theater_id', $movie_theater_id)->delete();
    	Session::put('message','Xóa Phòng Chiếu Thành Công');
    	return Redirect::to('all-theater');
    }
}
