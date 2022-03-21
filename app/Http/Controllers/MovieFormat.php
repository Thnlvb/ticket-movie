<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use App\Models\format;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class MovieFormat extends Controller
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

    //Thêm định dạng phim mới
    public function add_format(){
        $this->AuthLogin();
    	return view('admin.add_format');	
    }

    //Xem danh sách định dạng phim
    public function all_format(){
        $this->AuthLogin();
    	$all_movie_format = DB::table ('tbl_movie_format')->paginate(10);
       // $all_movie_format = format::all()
    	$manager_movie_format = view ('admin.all_format')->with('all_movie_format', $all_movie_format);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_format
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.all_format',$manager_movie_format);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Lưu định dạng phim vào CSDL
    public function save_format(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['format_name'] = $request->format_name; 
    	$data['format_status'] = $request->format_status;
    	$data['created_at'] = now(); 
        $data['updated_at'] = now();

    	DB::table('tbl_movie_format')->insert($data);

    	Session::put('message','Thêm Định Dạng Phim Mới Thành Công');
    	return Redirect::to('all-format');
    }

    //Đổi trạng thái của định dạng phim
    public function unactive_format ($movie_format_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_format')->where('format_id',$movie_format_id)->update(['format_status'=>1]);
    	//Khi click vào ss format_id với $movie_format_id trong csdl sau đó update cột format_status=1
    	Session::put('message','Kích Hoạt Định Dạng Phim Thành Công');
    	return Redirect::to('all-format');
    }

    //Đổi trạng thái của định dạng phim
    public function active_format ($movie_format_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_format')->where('format_id',$movie_format_id)->update(['format_status'=>0]);
    	//Khi click vào ss format_id với $movie_format_id trong csdl sau đó update cột format_status=0
    	Session::put('message','Loại Bỏ Định Dạng Phim Thành Công');
    	return Redirect::to('all-format');
    }

    //Chỉnh sửa chi tiết định dạng phim
    public function edit_format ($format_id){
        $this->AuthLogin();
    	$edit_format = DB::table ('tbl_movie_format')->where('format_id',$format_id)->get();
    	$manager_movie_format = view ('admin.edit_format')->with('edit_format', $edit_format);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_format
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.edit_format',$manager_movie_format);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_format(Request $request, $format_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['format_name'] = $request->format_name; 
        $data['updated_at'] = now();
        DB::table('tbl_movie_format')->where('format_id',$format_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Định Dạng Phim Thành Công');
        return Redirect::to('all-format');
    }

    //Xóa định dạng phim khỏi CSDL
    public function delete_format ($movie_format_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_format')->where('format_id', $movie_format_id)->delete();
    	Session::put('message','Xóa Định Dạng Phim Thành Công');
    	return Redirect::to('all-format');
    }
}
