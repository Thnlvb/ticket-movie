<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class MovieSchedule extends Controller
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
    public function add_schedule(){
        $this->AuthLogin();
        $schedule_times = DB::table('tbl_times')->orderby('times_id','desc')->get();
        $schedule_theater = DB::table('tbl_movie_theater')->orderby('theater_id','desc')->get();
        $schedule_movie = DB::table('tbl_category_movie')->orderby('category_id','desc')->get();
    	
        return view('admin.add_schedule')->with('schedule_times',$schedule_times)->with('schedule_theater', $schedule_theater)->with('schedule_movie',$schedule_movie);	
    }

    //Xem danh mục lịch chiếu
    public function all_schedule(){
        $this->AuthLogin();
    	$all_schedule = DB::table ('tbl_movie_schedule')
                                ->join('tbl_times','tbl_times.times_id','=','tbl_movie_schedule.schedule_times')
                                ->join('tbl_movie_theater','tbl_movie_theater.theater_id','=','tbl_movie_schedule.schedule_theater')
                                ->join('tbl_category_movie','tbl_category_movie.category_id','=','tbl_movie_schedule.schedule_movie')
                                ->orderby('tbl_movie_schedule.schedule_id','desc')->paginate(10);

    	$manager_schedule = view ('admin.all_schedule')->with('all_schedule', $all_schedule);
    	return view('admin_layout')->with('admin.all_schedule',$manager_schedule);
    }

    //Lưu lịch chiếu vào CSDL
    public function save_schedule(Request $request){
        $this->AuthLogin();
    	$data = array();
        $data['schedule_theater'] = $request->schedule_theater;
        $data['schedule_times'] = $request->schedule_times; 
        $data['schedule_movie'] = $request->schedule_movie; 
        $data['schedule_status'] = $request->schedule_status;
        $data['created_at'] = now();
        $data['updated_at'] = now();

    	DB::table('tbl_movie_schedule')->insert($data);
    	Session::put('message','Thêm Lịch Chiếu Mới Thành Công');
    	return Redirect::to('all-schedule');
    }

    //Đổi trạng thái của lịch chiếu
    public function unactive_schedule ($schedule_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_schedule')->where('schedule_id',$schedule_id)->update(['schedule_status'=>1]);
    	Session::put('message','Kích Hoạt lịch chiếu Thành Công');
    	return Redirect::to('all-schedule');
    }

    //Đổi trạng thái của lịch chiếu
    public function active_schedule ($schedule_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_schedule')->where('schedule_id',$schedule_id)->update(['schedule_status'=>0]);
    	Session::put('message','Loại Bỏ lịch chiếu Thành Công');
    	return Redirect::to('all-schedule');
    }
    
    //Chỉnh sửa chi tiết lịch chiếu
    public function edit_schedule ($schedule_id){
        $this->AuthLogin();
        $edit_theater = DB::table('tbl_movie_theater')->orderby('theater_id','desc')->get();
        $edit_times = DB::table('tbl_times')->orderby('times_id','desc')->get();
        $edit_movie = DB::table('tbl_category_movie')->orderby('category_id','desc')->get();
    	
        $edit_schedule = DB::table('tbl_movie_schedule')->where('schedule_id',$schedule_id)->get();
    	
    	$manager_schedule = view ('admin.edit_schedule')->with('edit_theater', $edit_theater)
                                                        ->with('edit_times',$edit_times)
                                                        ->with('edit_movie',$edit_movie)
                                                        ->with('edit_schedule', $edit_schedule);                           
    	return view('admin_layout')->with('admin.edit_schedule',$manager_schedule);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_schedule(Request $request, $schedule_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
       $data = array();
        $data['schedule_theater'] = $request->schedule_theater;
        $data['schedule_times'] = $request->schedule_times; 
        $data['schedule_movie'] = $request->schedule_movie;
        $data['updated_at'] = now();

        DB::table('tbl_movie_schedule')->where('schedule_id',$schedule_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Lịch Chiếu Thành Công');
        return Redirect::to('all-schedule');
    }

    //Xóa lịch chiếu khỏi CSDL
    public function delete_schedule ($schedule_id){
        $this->AuthLogin();
    	DB::table('tbl_movie_schedule')->where('schedule_id',$schedule_id)->delete();
    	Session::put('message','Xóa Lịch Chiếu Thành Công');
    	return Redirect::to('all-schedule');
    }
}
