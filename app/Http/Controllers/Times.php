<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class Times extends Controller
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

    //Thêm thời gian mới
    public function add_times(){
        $this->AuthLogin();
    	return view('admin.add_times');	
    }

    //Xem danh sách thời gian
    public function all_times(){
        $this->AuthLogin();
    	$all_movie_times = DB::table ('tbl_times')->paginate(10);
    	$manager_movie_times = view ('admin.all_times')->with('all_movie_times', $all_movie_times);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_times
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.all_times',$manager_movie_times);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Lưu thời gian vào CSDL
    public function save_times(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['start_times'] = $request->times_start;
    	$data['day_times'] = $request->times_day;
    	$data['times_status'] = $request->times_status;
    	$data['created_at'] = now();
        $data['updated_at'] = now();

    	DB::table('tbl_times')->insert($data);

    	Session::put('message','Thêm Thời Gian Mới Thành Công');
    	return Redirect::to('all-times');
    }

    //Đổi trạng thái của thời gian
    public function unactive_times ($times_id){
        $this->AuthLogin();
    	DB::table('tbl_times')->where('times_id',$times_id)->update(['times_status'=>1]);
    	//Khi click vào ss times_id với $movie_times_id trong csdl sau đó update cột times_status=1
    	Session::put('message','Kích Hoạt Thời Gian Thành Công');
    	return Redirect::to('all-times');
    }

    //Đổi trạng thái của thời gian
    public function active_times ($times_id){
        $this->AuthLogin();
    	DB::table('tbl_times')->where('times_id',$times_id)->update(['times_status'=>0]);
    	//Khi click vào ss times_id với $movie_times_id trong csdl sau đó update cột times_status=0
    	Session::put('message','Loại Bỏ Thời Gian Thành Công');
    	return Redirect::to('all-times');
    }

    //Chỉnh sửa chi tiết thời gian
    public function edit_times ($times_id){
        $this->AuthLogin();
    	$edit_times = DB::table ('tbl_times')->where('times_id',$times_id)->get();
    	$manager_times = view ('admin.edit_times')->with('edit_times', $edit_times);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $edit_times
    	//Dựa vào biến $edit_times để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.edit_times',$manager_times);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_times(Request $request, $times_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['start_times'] = $request->times_start; 
    	$data['day_times'] = $request->times_day;
        $data['updated_at'] = now();
        DB::table('tbl_times')->where('times_id',$times_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Thời Gian Thành Công');
        return Redirect::to('all-times');
    }

    //Xóa thời gian khỏi CSDL
    public function delete_times ($times_id){
        $this->AuthLogin();
    	DB::table('tbl_times')->where('times_id', $times_id)->delete();
    	Session::put('message','Xóa Thời Gian Thành Công');
    	return Redirect::to('all-times');
    }
}
