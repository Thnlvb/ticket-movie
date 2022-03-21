<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class ChairTypes extends Controller
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

    //Thêm loại ghế mới
    public function add_types(){
        $this->AuthLogin();
    	return view('admin.add_types');	
    }

    //Xem danh sách loại ghế
    public function all_types(){
        $this->AuthLogin();
    	$all_chair_types = DB::table ('tbl_chair_types')->paginate(10);
    	$manager_chair_types = view ('admin.all_types')->with('all_chair_types', $all_chair_types);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_movie_types
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.all_types',$manager_chair_types);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Lưu định dạng phim vào CSDL
    public function save_types(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['types_name'] = $request->types_name;
    	$data['types_surcharge'] = $request->types_surcharge; 
    	$data['types_status'] = $request->types_status;
    	$data['created_at'] = now();
        $data['updated_at'] = now();

    	DB::table('tbl_chair_types')->insert($data);

    	Session::put('message','Thêm Loại Ghế Mới Thành Công');
    	return Redirect::to('all-types');
    }

    //Đổi trạng thái của loại ghế
    public function unactive_types($types_id){
        $this->AuthLogin();
    	DB::table('tbl_chair_types')->where('types_id',$types_id)->update(['types_status'=>1]);
    	//Khi click vào ss types_id với $movie_types_id trong csdl sau đó update cột types_status=1
    	Session::put('message','Kích Hoạt Loại Ghế Thành Công');
    	return Redirect::to('all-types');
    }

    //Đổi trạng thái của loại ghế
    public function active_types($types_id){
        $this->AuthLogin();
    	DB::table('tbl_chair_types')->where('types_id',$types_id)->update(['types_status'=>0]);
    	//Khi click vào ss types_id với $movie_types_id trong csdl sau đó update cột types_status=0
    	Session::put('message','Loại Bỏ Loại Ghế Thành Công');
    	return Redirect::to('all-types');
    }

    //Chỉnh sửa chi tiết loại ghế
    public function edit_types ($types_id){
        $this->AuthLogin();
    	$edit_types = DB::table ('tbl_chair_types')->where('types_id',$types_id)->get();
    	$manager_chair_types = view ('admin.edit_types')->with('edit_types', $edit_types);
    	return view('admin_layout')->with('admin.edit_types',$manager_chair_types);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_types(Request $request, $types_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['types_name'] = $request->types_name;
    	$data['types_surcharge'] = $request->types_surcharge; 
        $data['updated_at'] = now();
        DB::table('tbl_chair_types')->where('types_id',$types_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Loại Ghế Thành Công');
        return Redirect::to('all-types');
    }

    //Xóa loại phim khỏi CSDL
    public function delete_types ($types_id){
        $this->AuthLogin();
    	DB::table('tbl_chair_types')->where('types_id', $types_id)->delete();
    	Session::put('message','Xóa Loại Ghế Thành Công');
    	return Redirect::to('all-types');
    }
}
