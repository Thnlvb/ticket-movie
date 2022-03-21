<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class Showtimes extends Controller
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

    //Thêm lịch chiếu mới
    public function add_showtimes(){
        $this->AuthLogin();
        $add_movie = DB::table('tbl_category_movie')->orderby('category_id','desc')->get();
        $add_times = DB::table('tbl_times')->orderby('times_id','desc')->get();

    	return view('admin.add_showtimes')->with('add_movie',$add_movie)->with('add_times',$add_times);	
    }

    //Xem lịch chiếu phim
    public function all_showtimes(){
        $this->AuthLogin();
    	$all_showtimes = DB::table ('tbl_showtimes')
    							->join ('tbl_category_movie','tbl_category_movie.category_id','=','tbl_showtimes.showtimes_movie')
    							->join ('tbl_times','tbl_times.times_id','=','tbl_showtimes.showtimes_times')
    							->orderby('tbl_times.start_times','ASC')->get();

    	$manager_showtimes = view ('admin.all_showtimes')->with('all_showtimes', $all_showtimes);
    	return view('admin_layout')->with('admin.all_showtimes',$manager_showtimes);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Lưu lịch chiếu phim vào CSDL
    public function save_showtimes(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['showtimes_movie'] = $request->showtimes_movie;
    	$data['showtimes_times'] = $request->showtimes_times; 
    	$data['showtimes_status'] = $request->showtimes_status;
        $data['created_at'] = now();
        $data['updated_at'] = now();
    	
    	DB::table('tbl_showtimes')->insert($data);

    	Session::put('message','Thêm Lịch Chiếu Mới Thành Công');
    	return Redirect::to('all-showtimes');
    }

    //Đổi trạng thái của lịch chiếu phim
    public function unactive_showtimes ($showtimes_id){
        $this->AuthLogin();
    	DB::table('tbl_showtimes')->where('showtimes_id',$showtimes_id)->update(['showtimes_status'=>1]);
    	Session::put('message','Kích Hoạt Lịch Chiếu Thành Công');
    	return Redirect::to('all-showtimes');
    }

    //Đổi trạng thái của lịch chiếu phim
    public function active_showtimes ($showtimes_id){
    	DB::table('tbl_showtimes')->where('showtimes_id',$showtimes_id)->update(['showtimes_status'=>0]);
    	Session::put('message','Loại Bỏ Lịch Chiếu Thành Công');
    	return Redirect::to('all-showtimes');
    }

    //Chỉnh sửa chi tiết lịch chiếu phim
    public function edit_showtimes ($showtimes_id){
        $this->AuthLogin();
        $add_movie = DB::table('tbl_category_movie')->orderby('category_id','desc')->get();
        $add_times = DB::table('tbl_times')->orderby('times_id','desc')->get();

    	$edit_showtimes = DB::table ('tbl_showtimes')->where('showtimes_id',$showtimes_id)->get();
    	$manager_showtimes = view ('admin.edit_showtimes')
    								->with('edit_showtimes', $edit_showtimes)
    								->with('add_movie',$add_movie)
    								->with('add_times',$add_times);
    	
    	return view('admin_layout')->with('admin.edit_showtimes',$manager_showtimes);
    }

    //Cập nhật sau chỉnh sửa
    public function update_showtimes(Request $request, $showtimes_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
    	$data = array();
    	$data['showtimes_movie'] = $request->showtimes_movie;
    	$data['showtimes_times'] = $request->showtimes_times; 
        $data['updated_at'] = now();
        DB::table('tbl_showtimes')->where('showtimes_id',$showtimes_id)->update($data);
        Session::put('message','Cập Nhật Lịch Chiếu Thành Công');
        return Redirect::to('all-showtimes');
    }

    //Xóa loại phim khỏi CSDL
    public function delete_showtimes ($showtimes_id){
        $this->AuthLogin();
    	DB::table('tbl_showtimes')->where('showtimes_id', $showtimes_id)->delete();
    	Session::put('message','Xóa Lịch Chiếu Thành Công');
    	return Redirect::to('all-showtimes');
    }
}
