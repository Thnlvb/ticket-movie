<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
    	$movie_genre = DB::table('tbl_movie_genre')->where('genre_status','1')->orderby('genre_id','desc')->get();
        $movie_format = DB::table('tbl_movie_format')->where('format_status','1')->orderby('format_id','desc')->get(); 
        
        $da = Carbon::now();
        $all_movie_playing = DB::table('tbl_category_movie')->where('category_status','1')->where('category_date','<=',$da)->orderby('category_id','desc')->limit(6)->get();

        $all_movie_coming = DB::table('tbl_category_movie')->where('category_status','0')->where('category_date','>',$da)->orderby('category_id','desc')->limit(6)->get();

        // echo '<pre>';
        // print_r($day);
        // echo '</pre>';
    	return view('pages.home')->with('genre',$movie_genre)->with('format',$movie_format)->with('all_movie_playing',$all_movie_playing)->with('all_movie_coming',$all_movie_coming);
    }

    public function searchh(Request $request){
        $key = $request->keys;
        $all_movie_playing = DB::table('tbl_category_movie')->where('category_status','1')->orderby('category_id','desc')->get();
        $search = DB::table('tbl_category_movie')->where('category_name','like','%'.$key.'%')->get();
 
        return view('pages.movie.search')->with('all_movie_playing',$all_movie_playing)->with('search',$search);
    }
}
