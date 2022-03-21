<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class Chair extends Controller
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

	//Thêm ghế
    public function add_chair(){
        $this->AuthLogin();
        $add_chair = DB::table('tbl_chair_types')->orderby('types_id','asc')->get();
        $add_theater = DB::table('tbl_movie_theater')->orderby('theater_id','asc')->get();

        return view('admin.add_chair')->with('add_chair',$add_chair)->with('add_theater',$add_theater);	
    }

    //Xem danh mục ghế
    public function all_chair(){
        $this->AuthLogin(); 
    	$all_chair = DB::table ('tbl_chair')
                                ->join('tbl_chair_types','tbl_chair.chair_types','=','tbl_chair_types.types_id')
                                ->join('tbl_movie_theater','tbl_chair.chair_theater','=','tbl_movie_theater.theater_id') 
                                ->orderby('tbl_chair.chair_id','ASC')->paginate(10);

    	$manager_chair = view ('admin.all_chair')->with('all_chair', $all_chair);
    	return view('admin_layout')->with('admin.all_chair',$manager_chair);
    	//Trang admin_layout sẽ chứa cacs giá trị của biến manager
    }

    //Lưu ghế vào CSDL
    public function save_chair(Request $request){
        $this->AuthLogin();
    	$data = array();
        $data['chair_name'] = $request->chair_name; 
        $data['chair_types'] = $request->chair_types;
        $data['chair_theater'] = $request->chair_theater;
        $data['chair_status'] = $request->chair_status;
        $data['created_at'] = now();
        $data['updated_at'] = now();

    	DB::table('tbl_chair')->insert($data);
    	Session::put('message','Thêm Ghế Mới Thành Công');
    	return Redirect::to('all-chair');
    }

    //Đổi trạng thái của ghế
    public function unactive_chair ($chair_id){
        $this->AuthLogin();
    	DB::table('tbl_chair')->where('chair_id',$chair_id)->update(['chair_status'=>1]);
    	//Khi click vào ss chair_id với $chair_id trong csdl sau đó update cột chair_status=1
    	Session::put('message','Kích Hoạt Ghế Thành Công');
    	return Redirect::to('all-chair');
    }

    //Đổi trạng thái của ghế
    public function active_chair ($chair_id){
        $this->AuthLogin();
    	DB::table('tbl_chair')->where('chair_id',$chair_id)->update(['chair_status'=>0]);
    	//Khi click vào ss chair_id với $chair_id trong csdl sau đó update cột chair_status=0
    	Session::put('message','Loại Bỏ Ghế Thành Công');
    	return Redirect::to('all-chair');
    }
    
    //Chỉnh sửa chi tiết ghế
    public function edit_chair ($chair_id){
        $this->AuthLogin();
        $chair_types = DB::table('tbl_chair_types')->orderby('types_id','desc')->get();
        $chair_theater = DB::table('tbl_movie_theater')->orderby('theater_id','desc')->get();
    	$edit_chair = DB::table ('tbl_chair')->where('chair_id',$chair_id)->get();
    	
    	$manager_chair = view ('admin.edit_chair')->with('edit_chair', $edit_chair)->with('chair_types', $chair_types)->with('chair_theater', $chair_theater);
    		
    	return view('admin_layout')->with('admin.edit_chair',$manager_chair);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_chair(Request $request, $chair_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
       $data = array();
        $data['chair_name'] = $request->chair_name;
        $data['chair_types'] = $request->chair_types;
        $data['updated_at'] = now();

        DB::table('tbl_chair')->where('chair_id',$chair_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Ghế Thành Công');
        return Redirect::to('all-chair');
    }

    //Xóa ghế khỏi CSDL
    public function delete_chair ($chair_id){
        $this->AuthLogin();
    	DB::table('tbl_chair')->where('chair_id',$chair_id)->delete();
    	Session::put('message','Xóa Ghế Thành Công');
    	return Redirect::to('all-chair');
    }

}
