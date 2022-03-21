<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests; //Các thư viện cần thiết cho Session
use Session;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect; //Redirect (thành công hay thất bại sẽ trả về một trang gì đó)
session_start();

class TicketsBook extends Controller
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

    public function tickets_book(Request $request){
      	$category_id = $request->movie;
    	$quantity = $request->qty;
        $chair1 = $request->chair;

        $info = DB::table('tbl_movie_schedule')
                        ->join('tbl_category_movie','tbl_movie_schedule.schedule_movie','=','tbl_category_movie.category_id')
                        ->join('tbl_movie_theater','tbl_movie_schedule.schedule_theater','=','tbl_movie_theater.theater_id')
                        ->join('tbl_times','tbl_movie_schedule.schedule_times','=','tbl_times.times_id')
                        ->join('tbl_chair','tbl_movie_theater.theater_id','=','tbl_chair.chair_theater')
                         ->join('tbl_chair_types','tbl_chair.chair_types','=','tbl_chair_types.types_id')
                        ->where('category_id',$category_id)
                        ->where('chair_id',$chair1)
                        ->first();
        
        $data['id'] = $category_id;
        $data['qty'] = $quantity;
        $data['name'] = $info->category_name;
        $data['price'] = $info->category_price + $info->types_surcharge;
        $data['weight'] = $info->category_price;
        $data['options']['chair'] = $info->chair_name;
        $data['options']['chair_id'] = $chair1;
        $data['options']['surcharge'] = $info->types_surcharge;
        $data['options']['price'] = $info->category_price;
        $data['options']['old'] = $info->category_old;
    	//Cart::add('293ad', 'Product 1', 1, 9.99, 550); //phiên làm việc
    	// Cart::destroy(); //hủy phiên làm việc

    	Cart::add($data);
        if ($request->chair){
            DB::table('tbl_chair')->where('chair_id',$request->chair)->update(['chair_status'=>0]);
        }     
        return Redirect::to('/show-tickets');
    }
 
    public function show_tickets (){
        $schedule_times = DB::table('tbl_times')->where('times_status','1')->orderby('times_id','desc')->get();
        $schedule_chair = DB::table('tbl_chair')->where('chair_status','1')->orderby('chair_id','desc')->get();
        $schedule_chair_types = DB::table('tbl_chair_types')->where('types_status','1')->orderby('types_id','desc')->get();

    	return view('pages.book_tickets.show_booktickets')->with('times',$schedule_times)->with('chair',$schedule_chair)->with('types',$schedule_chair_types);
    }

    public function delete_tickets($rowId){
        $tickets = Cart::content();
        
        foreach($tickets as $movie){
            $schedule = $movie->id;
            $chair = $movie->options->chair;
        }
        DB::table('tbl_movie_schedule')
                        ->join('tbl_movie_theater','tbl_movie_schedule.schedule_theater','=','tbl_movie_theater.theater_id')
                        ->join('tbl_chair','tbl_movie_theater.theater_id','=','tbl_chair.chair_theater')
                        ->where('schedule_id',$schedule)
                        ->where('chair_name',$chair)->update(['chair_status'=>1]);
        
        #Xóa vé dựa vào rowId
        Cart::update($rowId,0);
        return Redirect::to('/show-tickets');
    }

    public function add_customer(Request $request){
        $data = array();
        $data['customer_name'] = $request->name;
        $data['customer_email'] = $request->email;
        $data['customer_old'] = $request->old1;
        $data['customer_password'] = md5($request->password);
        $data['customer_phone'] = $request->phone;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        DB::table('tbl_customer')->insert($data);
        Session::put('message','Đăng Kí Tài Khoản Thành Công');      
        return Redirect::to('/login-checkout');
    }
    

    public function login_customer(Request $request){
        $email = $request->email;
        $password = md5($request->password);
        $check = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first(); 

        if($check){
            Session::put('customer_id',$check->customer_id);
            return Redirect::to('/payment');
        }else{
            return Redirect::to('/login-checkout');
        } 
    }

    public function login_checkout(){
        return view('pages.checkout.login_checkout');   
    }

    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/trang-chu');
    }

    public function checkout(){
        return view('pages.checkout.show_checkout');
    }
    
    public function payment(){
        $schedule_times = DB::table('tbl_times')->where('times_status','1')->orderby('times_id','desc')->get();
        $schedule_chair = DB::table('tbl_chair')->where('chair_status','1')->orderby('chair_id','desc')->get();
        $schedule_chair_types = DB::table('tbl_chair_types')->where('types_status','1')->orderby('types_id','desc')->get();

        return view('pages.checkout.payment')->with('times',$schedule_times)->with('chair',$schedule_chair)->with('types',$schedule_chair_types);
    }

    public function complete(Request $request){
        $content = Cart::content();
        $get = Session::get('customer_id');

        // lưu hình thức thanh toán
        $d1 = array();
        $d1['payment_name'] = $request->paymentt;
        $d1['payment_status'] = 'Đang chờ xử lý';
        $d1['created_at'] = now();
        $d1['updated_at'] = now();
        $payment = DB::table('tbl_payment')->insertGetId($d1);

        //lưu vé
        $d2 = array();
        $d2['tickets_customer'] = Session::get('customer_id');
        $d2['tickets_price'] = Cart::subtotal();
        $d2['tickets_payment'] = $payment;
        $d2['tickets_day'] = Carbon::now();
        $d2['tickets_status'] = 'Đang chờ xử lý';
        $d2['created_at'] = now();
        $d2['updated_at'] = now();
        $tickets = DB::table('tbl_tickets')->insertGetId($d2);

        //lưu chi tiết vé 
        foreach($content as $cont){
            $d3['details_category'] = $cont->id;
            $d3['details_tickets'] = $tickets;
            $d3['details_chair'] = $cont->options->chair_id;
            $d3['details_count'] = $cont->qty;
            $d3['details_total'] = $cont->price;
            $d3['created_at'] = now();
            $d3['updated_at'] = now();
            $old = $cont->options->old;
            DB::table('tbl_tickets_details')->insert($d3);
        }

        $customer = DB::table('tbl_customer')->where('customer_id',$get)->first();        
        $c = $customer->customer_old;
        $year=explode("-", $c)[0];
        $month=explode("-", $c)[1];
        $day=explode("-", $c)[2];

        $yyyy = Carbon::now()->year;
        $mm = Carbon::now()->month;
        $dd = Carbon::now()->day;

        $tuoi = $yyyy - $year;

        if($mm - $month < 0){
            $tuoi -= 1;
        }elseif($dd - $day < 0){
            $tuoi -= 1;
        }

        if($tuoi < $old){
            Session::put('message1','Tài Khoản Của Bạn Chưa Đủ Điều Kiện Để Đặt Vé Xem Phim Này!');
            return Redirect::to('/payment');
            DB::table('tbl_tickets')->where('tickets_id',$tickets)->delete();
            DB::table('tbl_tickets_details')->where('details_tickets',$tickets)->delete();

        }else{
            if ($d1['payment_name']==2){
                Cart::destroy();
                return view('pages.checkout.direct');
            }else{
                echo 'Thanh toán bằng thẻ';
            }
        }
    }

    public function tickets_management(){
        $this->AuthLogin();
        $all_tickets = DB::table ('tbl_tickets')
                                ->join('tbl_customer','tbl_customer.customer_id','=','tbl_tickets.tickets_customer')
                                ->join('tbl_tickets_details','tbl_tickets_details.details_tickets','=','tbl_tickets.tickets_id')
                                ->join('tbl_category_movie','tbl_category_movie.category_id','=','tbl_tickets_details.details_category')
                                ->join('tbl_chair','tbl_chair.chair_id','=','tbl_tickets_details.details_chair')
                                ->join('tbl_movie_theater','tbl_movie_theater.theater_id','=','tbl_chair.chair_theater')
                                ->select('tbl_tickets.*','tbl_customer.customer_name','tbl_tickets_details.*','tbl_category_movie.*','tbl_movie_theater.theater_name')
                                ->orderby('tbl_tickets.tickets_id','asc')->get();
        $manager_tickets = view('admin.manage')->with('all_tickets', $all_tickets);
       
        return view('admin_layout')->with('admin.manage',$manager_tickets);
    }

    public function view_tickets($ticketsId){
        $this->AuthLogin();
        $ticket_customer = DB::table ('tbl_tickets')
                                ->join('tbl_customer','tbl_customer.customer_id','=','tbl_tickets.tickets_customer')
                                ->where('tbl_tickets.tickets_id','=',$ticketsId)->first();
        
        $ticket = DB::table ('tbl_tickets')
                                ->join('tbl_customer','tbl_customer.customer_id','=','tbl_tickets.tickets_customer')
                                ->join('tbl_tickets_details','tbl_tickets_details.details_tickets','=','tbl_tickets.tickets_id')
                                ->join('tbl_category_movie','tbl_category_movie.category_id','=','tbl_tickets_details.details_category')
                                ->join('tbl_chair','tbl_chair.chair_id','=','tbl_tickets_details.details_chair')
                                ->join('tbl_movie_theater','tbl_movie_theater.theater_id','=','tbl_chair.chair_theater')
                                ->select('tbl_tickets.*','tbl_customer.*','tbl_tickets_details.*','tbl_category_movie.*','tbl_chair.*','tbl_movie_theater.*')
                                ->where('tbl_tickets.tickets_id','=',$ticketsId)->get();
                                                        
        $manager_tickets_id = view('admin.view_tickets')->with('ticket_customer', $ticket_customer)->with('ticket',$ticket);
       // echo '<pre>';
       // print_r($tickets_id);
       // echo '</pre>';
        return view('admin_layout')->with('admin.manage',$manager_tickets_id);
    }
}
