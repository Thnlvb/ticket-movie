<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class AdminController extends Controller 
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

    public function index (){
    	return view('admin_login');
    }

    public function show_dashboard (){
        $this->AuthLogin();
    	return view('admin.dashboard');
    }

    //Đăng nhập lấy tài khoản, di chuyển đến trang admin
    public function dashboard(Request $request){
    	$admin_email = $request->admin_email;
    	$admin_password = md5($request->admin_password);
    	$result = DB::table('tbl_admin')->where('admin_email',$admin_email)
                    ->where('admin_password',$admin_password)->first();
    	//chỉ lấy giới hạn là 1 user
		if ($result){
			Session::put('admin_name',$result->admin_name); //Lấy admin name từ csdl
			Session::put('admin_id',$result->admin_id);
			return Redirect::to ('/quanly');
		}else{
			Session::put('message','Tài khoản hoặc mật khẩu chưa đúng!');
			return Redirect::to ('/admin');
		}    
        // echo '<pre>';
        // print_r($admin_password);
        // echo '</pre>';	
    }

    //Đăng xuất tài khoản
    public function logout(){
        $this->AuthLogin();
    	Session::put('admin_name',null);
		Session::put('admin_id',null);
		return Redirect::to ('/admin');
    }

    public function search_chair(Request $request){
        $this->AuthLogin();
        $key = $request->key_chair;
        $search_chair = DB::table ('tbl_chair')
                                ->join('tbl_chair_types','tbl_chair.chair_types','=','tbl_chair_types.types_id')
                                ->join('tbl_movie_theater','tbl_chair.chair_theater','=','tbl_movie_theater.theater_id') 
                                ->where('chair_name','like','%'.$key.'%')
                                ->orderby('tbl_chair.chair_id','ASC')->get();
        //$search = DB::table('tbl_chair')->where('chair_name','like','%'.$key.'%')->get();
        // echo '<pre>';
        // print_r ($all_chair);
        // echo '<pre>';
        return view('admin.search_chair')->with('search',$search_chair);
    }

    public function search_format(Request $request){
        $this->AuthLogin();
        $key = $request->key_format;
        $search_format = DB::table ('tbl_movie_format')
                                ->where('format_name','like','%'.$key.'%')
                                ->orderby('tbl_movie_format.format_id','ASC')->get();
        return view('admin.search_format')->with('search',$search_format);
    }

    public function search_genre(Request $request){
        $this->AuthLogin();
        $key = $request->key_genre;
        $search_genre = DB::table ('tbl_movie_genre')
                                ->where('genre_name','like','%'.$key.'%')
                                ->orderby('tbl_movie_genre.genre_id','ASC')->get();
        return view('admin.search_genre')->with('search',$search_genre);
    }

    public function search_movie(Request $request){
        $this->AuthLogin();
        $key = $request->key_movie;
        $search_movie = DB::table ('tbl_category_movie')
                                ->join('tbl_movie_genre','tbl_movie_genre.genre_id','=','tbl_category_movie.movie_genre')
                                ->join('tbl_movie_format','tbl_movie_format.format_id','=','tbl_category_movie.movie_format')
                                ->where('category_name','like','%'.$key.'%')
                                ->orderby('tbl_category_movie.category_id','ASC')->get();
        return view('admin.search_movie')->with('search',$search_movie);
    }

    public function search_schedule(Request $request){
        $this->AuthLogin();
        $key = $request->key_schedule;
        $search_schedule = DB::table ('tbl_movie_schedule')
                                ->join('tbl_times','tbl_times.times_id','=','tbl_movie_schedule.schedule_times')
                                ->join('tbl_movie_theater','tbl_movie_theater.theater_id','=','tbl_movie_schedule.schedule_theater')
                                ->join('tbl_category_movie','tbl_category_movie.category_id','=','tbl_movie_schedule.schedule_movie')
                                ->where('tbl_category_movie.category_name','like','%'.$key.'%')
                                ->orderby('tbl_movie_schedule.schedule_id','ASC')->get();
        return view('admin.search_schedule')->with('search',$search_schedule);
    }

    public function search_theater(Request $request){
        $this->AuthLogin();
        $key = $request->key_theater;
        $search_theater = DB::table ('tbl_movie_theater')
                                ->where('theater_name','like','%'.$key.'%')
                                ->orderby('tbl_movie_theater.theater_id','ASC')->get();
        return view('admin.search_theater')->with('search',$search_theater);
    }

    public function search_times(Request $request){
        $this->AuthLogin();
        $key = $request->key_times;
        $search_times = DB::table ('tbl_times')
                                ->where('start_times','like','%'.$key.'%')
                                ->orderby('tbl_times.times_id','ASC')->get();
        return view('admin.search_times')->with('search',$search_times);
    }

    public function search_types(Request $request){
        $this->AuthLogin();
        $key = $request->key_types;
        $search_types = DB::table ('tbl_chair_types')
                                ->where('types_name','like','%'.$key.'%')
                                ->orderby('tbl_chair_types.types_id','ASC')->get();
        return view('admin.search_types')->with('search',$search_types);
    }

     public function search_customer(Request $request){
        $this->AuthLogin();
        $key = $request->key_customer;
        $search_customer = DB::table ('tbl_customer')
                                ->where('customer_name','like','%'.$key.'%')
                                ->orderby('tbl_customer.customer_id','ASC')->get();
        return view('admin.search_customer')->with('search',$search_customer);
    }
}
