<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start(); 

class CategoryMovie extends Controller
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

	//Thêm phim mới
    public function add_movie(){
        $this->AuthLogin();
        $movie_genre = DB::table('tbl_movie_genre')->orderby('genre_id','desc')->get();
        $movie_format = DB::table('tbl_movie_format')->orderby('format_id','desc')->get();
    	
        return view('admin.add_movie')->with('movie_genre',$movie_genre)->with('movie_format',$movie_format);	
    }

    //Xem danh mục phim
    public function all_movie(){
        $this->AuthLogin();
    	$all_category_movie = DB::table ('tbl_category_movie')
                                ->join('tbl_movie_genre','tbl_movie_genre.genre_id','=','tbl_category_movie.movie_genre')
                                ->join('tbl_movie_format','tbl_movie_format.format_id','=','tbl_category_movie.movie_format')
                                ->orderby('tbl_category_movie.category_date','desc')->paginate(10);

    	$manager_category_movie = view ('admin.all_movie')->with('all_category_movie', $all_category_movie);
    	// lấy từ view->file với dữ liệu đã được lấy từ csdl gán vào biến $all_category_movie
    	//Dựa vào biến $all_category_movie để lấy dữ liệu vào all_movie
    	return view('admin_layout')->with('admin.all_movie',$manager_category_movie);
    	//Trang admin_layout sẽ chứa cacs giá trị của biến manager
    }

    //Lưu phim vào CSDL
    public function save_category_movie(Request $request){
        $this->AuthLogin();
    	$data = array();
        $data['category_name'] = $request->category_movie_name; 
        //category_name: ten cot trong csdl; category_movie_name: ten trong add_movie.blade.php
        $data['category_time'] = $request->category_movie_time;
        $data['category_old'] = $request->category_movie_old;
        $data['category_date'] = $request->category_movie_date;
        $data['category_country'] = $request->category_movie_country;
        $data['category_directors'] = $request->category_movie_directors;
        $data['category_cast'] = $request->category_movie_cast;
        $data['category_desc'] = $request->category_movie_desc;
        $data['category_img'] = $request->category_movie_status;
        $data['category_price'] = $request->category_movie_price;
        $data['category_status'] = $request->category_movie_status;
        $data['movie_genre'] = $request->genre;

        $data['movie_format'] = $request->format;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        $get_image = $request->file('category_movie_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            //current(lấy phía trước) >< end(lấy phía sau) dựa vào dấu '.' phân tách
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            //số được sinh ra ngẫu nhiên lưu thành tên file ảnh
            //lấy đuôi file ảnh .jpg, .png, jpeg thêm vào file
            $get_image->move('public/upload/movie',$new_image);
            $data['category_img'] = $new_image;           
            DB::table('tbl_category_movie')->insert($data);

            Session::put('message','Thêm Phim Mới Thành Công');
            return Redirect::to('add-movie');
        }
        $date['category_img'] = '';
    	DB::table('tbl_category_movie')->insert($data);
    	Session::put('message','Thêm Phim Mới Thành Công');
    	return Redirect::to('all-movie');
    }

    //Đổi trạng thái của phim
    public function unactive ($category_movie_id){
        $this->AuthLogin();
    	DB::table('tbl_category_movie')->where('category_id',$category_movie_id)->update(['category_status'=>1]);
    	//Khi click vào ss category_id với $category_movie_id trong csdl sau đó update cột category_status=1
    	Session::put('message','Kích Hoạt Phim Thành Công');
    	return Redirect::to('all-movie');
    }

    //Đổi trạng thái của phim
    public function active ($category_movie_id){
        $this->AuthLogin();
    	DB::table('tbl_category_movie')->where('category_id',$category_movie_id)->update(['category_status'=>0]);
    	//Khi click vào ss category_id với $category_movie_id trong csdl sau đó update cột category_status=0
    	Session::put('message','Loại Bỏ Phim Thành Công');
    	return Redirect::to('all-movie');
    }
    
    //Chỉnh sửa chi tiết phim
    public function edit_movie ($category_movie_id){
        $this->AuthLogin();
        $movie_genre = DB::table('tbl_movie_genre')->orderby('genre_id','desc')->get();
        $movie_format = DB::table('tbl_movie_format')->orderby('format_id','desc')->get();
    	$edit_category_movie = DB::table ('tbl_category_movie')->where('category_id',$category_movie_id)->get();
    	
    	$manager_category_movie = view ('admin.edit_movie')->with('edit_category_movie', $edit_category_movie)
                                    ->with('movie_genre', $movie_genre)->with('movie_format',$movie_format);
        //chỉnh sửa thông tin 'genre' và 'format' của csdl                            
    	return view('admin_layout')->with('admin.edit_movie',$manager_category_movie);
    	//Trang admin_layout sẽ chứa các giá trị của biến manager
    }

    //Cập nhật sau chỉnh sửa
    public function update_category_movie(Request $request, $category_movie_id){ //Lấy thêm yêu cầu dữ liệu
    	$this->AuthLogin();
        $data = array();
    	$data['category_name'] = $request->category_movie_name; 
        //category_name: ten cot trong csdl; category_movie_name: ten trong add_movie.blade.php
    	$data['category_time'] = $request->category_movie_time;
    	$data['category_old'] = $request->category_movie_old;
    	$data['category_date'] = $request->category_movie_date;
    	$data['category_country'] = $request->category_movie_country;
        $data['category_directors'] = $request->category_movie_directors;
        $data['category_cast'] = $request->category_movie_cast;
    	$data['category_desc'] = $request->category_movie_desc;
        $data['category_price'] = $request->category_movie_price;
       // $data['category_img'] = $request->category_movie_image;
        $data['movie_genre'] = $request->genre;
        $data['movie_format'] = $request->format;
        $data['updated_at'] = now();

        $get_image = $request->file('category_movie_image');

        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            //current(lấy phía trước) >< end(lấy phía sau) dựa vào dấu '.' phân tách
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            //số được sinh ra ngẫu nhiên lưu thành tên file ảnh
            //lấy đuôi file ảnh .jpg, .png, jpeg thêm vào file
            $get_image->move('public/upload/movie',$new_image);
            $data['category_img'] = $new_image;           
            DB::table('tbl_category_movie')->where('category_id',$category_movie_id)->update($data);
            //update số cột tương ứng với name đã lấy

            Session::put('message','Cập Nhật Phim Thành Công');
            return Redirect::to('all-movie');
        }
        DB::table('tbl_category_movie')->where('category_id',$category_movie_id)->update($data);
        //nếu người dùng không update hình ảnh thì để như cũ
        Session::put('message','Cập Nhật Phim Thành Công');
        return Redirect::to('all-movie');
    }

    //Xóa phim khỏi CSDL
    public function delete_movie ($category_movie_id){
        $this->AuthLogin();
        //$movie = DB::table('tbl_category_movie')->where('category_id',$category_movie_id);
        //$image_path = app_path("public/upload/movie/{$movie->category_movie_image}");
        // if (File::exists($image_path)) {
        //     //File::delete($image_path);
        //     unlink($image_path);
        // }
        // $movie->delete();

        //Xóa file hình thẻ cũ
        // $get_img = DB::table('tbl_category_movie')->where('category_id',$category_movie_id)->get();
        // if(file_exists(app_path('public/upload/movie',$get_img)))
        // {
        //     unlink(app_path('public/upload/movie',$get_img));
        // }
        // Session::put('message','Xoá thành công');
        // return redirect('/all-product');
    	DB::table('tbl_category_movie')->where('category_id',$category_movie_id)->delete();
    	Session::put('message','Xóa Phim Thành Công');
    	return Redirect::to('all-movie');
    }

    ////////////////////////////////////////////////////////

    public function show_movie_playing_home(){
        $da = Carbon::now();
        $movie_genre = DB::table('tbl_movie_genre')->where('genre_status','1')->orderby('genre_id','desc')->get();
        $movie_format = DB::table('tbl_movie_format')->where('format_status','1')->orderby('format_id','desc')->get();
        $all_movie = DB::table('tbl_category_movie')->where('category_status','1')->where('category_date','<=',$da)->orderby('category_id','asc')->limit(9)->get();
        
        return view('pages.movie_playing.show_movie_playing')->with('genre',$movie_genre)->with('format',$movie_format)->with('all_movie',$all_movie);
    } 

    public function show_movie_coming_home(){
        $da = Carbon::now();
        $movie_genre = DB::table('tbl_movie_genre')->where('genre_status','1')->orderby('genre_id','desc')->get();
        $movie_format = DB::table('tbl_movie_format')->where('format_status','1')->orderby('format_id','desc')->get();
        $all_movie = DB::table('tbl_category_movie')->where('category_status','0')->where('category_date','>',$da)->orderby('category_id','desc')->limit(9)->get();
        
        // echo '<pre>';
        // print_r([$all_movie->category_old]);
        // echo '</pre>';
        return view('pages.movie_coming.show_movie_coming')->with('genre',$movie_genre)->with('format',$movie_format)->with('all_movie',$all_movie);
    }

    ///////////////////////////////////////////////////////

    public function movie_details ($category_movie_id){
        $movie_genre = DB::table('tbl_movie_genre')->where('genre_status','1')->orderby('genre_id','desc')->get();
        $movie_format = DB::table('tbl_movie_format')->where('format_status','1')->orderby('format_id','desc')->get();
        $movie_detail = DB::table ('tbl_category_movie')
                            ->join('tbl_movie_genre','tbl_movie_genre.genre_id','=','tbl_category_movie.movie_genre')
                            ->join('tbl_movie_format','tbl_movie_format.format_id','=','tbl_category_movie.movie_format') 
                            ->where('tbl_category_movie.category_id',$category_movie_id)->get();
       
        $times = DB::table('tbl_movie_schedule')
                        ->join('tbl_category_movie','tbl_movie_schedule.schedule_movie','=','tbl_category_movie.category_id')
                        ->join('tbl_movie_theater','tbl_movie_schedule.schedule_theater','=','tbl_movie_theater.theater_id')
                        ->join('tbl_times','tbl_movie_schedule.schedule_times','=','tbl_times.times_id')
                        ->where('schedule_movie',$category_movie_id )->orderby('schedule_id','desc')->get();

        $chair = DB::table('tbl_chair')
                        ->join('tbl_movie_theater','tbl_chair.chair_theater','=','tbl_movie_theater.theater_id')
                        ->join('tbl_movie_schedule','tbl_movie_theater.theater_id','=','tbl_movie_schedule.schedule_theater')
                        ->where('chair_status',1)
                        ->orderby('chair_id','asc')->get();

        foreach($movie_detail as $key => $values){
        //lấy ra phim cùng thể loại
            $genre_id = $values->genre_id; 
        }
        $movie_rcm = DB::table ('tbl_category_movie')
                            ->join('tbl_movie_genre','tbl_movie_genre.genre_id','=','tbl_category_movie.movie_genre')
                            ->join('tbl_movie_format','tbl_movie_format.format_id','=','tbl_category_movie.movie_format')
                            ->where('tbl_category_movie.movie_genre',$genre_id)
                            ->where('category_status',1)
                            ->whereNotIn('tbl_category_movie.category_id',[$category_movie_id])->get(); 

        return view('pages.movie.show_movie_details')->with('genre',$movie_genre)->with('format',$movie_format)->with('movie_detail', $movie_detail)->with('movie_rcm',$movie_rcm)->with('schedule',$times)->with('chair',$chair);
    }


    public function select_tickets(Request $request){
        $data = $request->all();
        if ($data['action']){
            $output = '';
            if ($data['action']=='times'){
                $select_chair = DB::table('tbl_chair')
                                    ->join('tbl_movie_theater','tbl_chair.chair_theater','=','tbl_movie_theater.theater_id')
                                    ->join('tbl_movie_schedule','tbl_movie_theater.theater_id','=','tbl_movie_schedule.schedule_theater')
                                    ->where('schedule_times',$data['idtimes'])
                                    ->where('chair_status',1)->orderby('chair_id','asc')->get();
                $output.='<option>--Chọn Vị Trí Ghế--</option>';
                foreach($select_chair as $key => $chair){
                $output .='<option value="'.$chair->chair_id.'">'.$chair->chair_name.'</option>';
                }
            }
        }
        echo $output;
    }

}
