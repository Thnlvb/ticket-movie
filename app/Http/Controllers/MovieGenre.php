<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class MovieGenre extends Controller
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

    //Thêm loại phim mới
    public function add_genre(){
        $this->AuthLogin();
    	return view('admin.add_genre');	
    }

    //Xem loại phim
    public function all_genre(){
        $this->AuthLogin();
    	$all_movie_genre = DB::table ('tbl_movie_genre')->paginate(10);
    	$manager_movie_genre = view ('admin.all_genre')->with('all_movie_genre', $all_movie_genre);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_genre
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.all_genre',$manager_movie_genre);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Lưu loại phim vào CSDL
    public function save_genre(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['genre_name'] = $request->genre_name; 
    	$data['genre_status'] = $request->genre_status;
        $data['created_at'] = now();
        $data['updated_at'] = now();
    	
    	DB::table('tbl_movie_genre')->insert($data);

    	Session::put('message','Thêm Loại Phim Mới Thành Công');
    	return Redirect::to('all-genre');
    }

    //Đổi trạng thái của loại phim
    public function unactive_genre ($movie_genre_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_genre')->where('genre_id',$movie_genre_id)->update(['genre_status'=>1]);
    	//Khi click vào ss genre_id với $movie_genre_id trong csdl sau đó update cột genre_status=1
    	Session::put('message','Kích Hoạt Loại Phim Thành Công');
    	return Redirect::to('all-genre');
    }

    //Đổi trạng thái của loại phim
    public function active_genre ($movie_genre_id){
    	DB::table('tbl_movie_genre')->where('genre_id',$movie_genre_id)->update(['genre_status'=>0]);
    	//Khi click vào ss genre_id với $movie_genre_id trong csdl sau đó update cột genre_status=0
    	Session::put('message','Loại Bỏ Loại Phim Thành Công');
    	return Redirect::to('all-genre');
    }

    //Chỉnh sửa chi tiết loại phim
    public function edit_genre ($genre_id){
        $this->AuthLogin();
    	$edit_genre = DB::table ('tbl_movie_genre')->where('genre_id',$genre_id)->get();
    	$manager_movie_genre = view ('admin.edit_genre')->with('edit_genre', $edit_genre);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_genre
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.edit_genre',$manager_movie_genre);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_genre(Request $request, $genre_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['genre_name'] = $request->genre_name; 
        $data['updated_at'] = now();
        DB::table('tbl_movie_genre')->where('genre_id',$genre_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Loại Phim Thành Công');
        return Redirect::to('all-genre');
    }

    //Xóa loại phim khỏi CSDL
    public function delete_genre ($genre_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_genre')->where('genre_id', $movie_genre_id)->delete();
    	Session::put('message','Xóa Loại Phim Thành Công');
    	return Redirect::to('all-genre');
    }
}
