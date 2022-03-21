<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use App\Models\format;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class Customer extends Controller
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

    //Xem loại phim
    public function all_customer(){
        $this->AuthLogin();
    	$all_customer = DB::table ('tbl_customer')->paginate(10);
    	$manager_customer = view ('admin.all_customer')->with('all_customer', $all_customer);
    	return view('admin_layout')->with('admin.all_customer',$manager_customer);
    	//Trang admin_layout sẽ chứa cac giá trị của biến manager
    }

    //Chỉnh sửa chi tiết loại phim
    public function edit_customer ($customer_id){
        $this->AuthLogin();
    	$edit_customer = DB::table ('tbl_customer')->where('customer_id',$customer_id)->get();
    	$manager_customer = view ('admin.edit_customer')->with('edit_customer', $edit_customer);
    	return view('admin_layout')->with('admin.edit_customer',$manager_customer);
    }

    //Cập nhật sau chỉnh sửa
    public function update_customer(Request $request, $customer_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['customer_name'] = $request->customer_name; 
    	$data['customer_old'] = $request->customer_old; 
    	$data['customer_email'] = $request->customer_email; 
    	$data['customer_phone'] = $request->customer_phone; 
        $data['updated_at'] = now();
        DB::table('tbl_customer')->where('customer_id',$customer_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Thông Tin Khách Hàng Thành Công');
        return Redirect::to('all-customer');
    }

    //Xóa loại phim khỏi CSDL
    public function delete_customer ($customer_id){
        $this->AuthLogin();
    	DB::table('tbl_customer')->where('customer_id', $customer_id)->delete();
    	Session::put('message','Xóa Loại Thông Tin Khách Hàng Thành Công');
    	return Redirect::to('all-customer');
    }
}
