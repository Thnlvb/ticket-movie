<?php

use Illuminate\Support\Facades\Route;

#Frontend
Route::get('/', 'HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::post('/search','HomeController@searchh');

#Danh sách phim đang chiếu	
Route::get('/movie-playing','CategoryMovie@show_movie_playing_home');
Route::get('/chi-tiet-phim/{category_movie_id}', 'CategoryMovie@movie_details');

##########Danh sách phim sắp chiếu	
Route::get('/movie-coming','CategoryMovie@show_movie_coming_home');
 
#Backend
Route::get('/admin','AdminController@index');
Route::get('/quanly','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard'); //dang nhap
Route::get('/logout','AdminController@logout');
Route::post('/search-chair','AdminController@search_chair');
Route::post('/search-format','AdminController@search_format');
Route::post('/search-genre','AdminController@search_genre');
Route::post('/search-movie','AdminController@search_movie');
Route::post('/search-schedule','AdminController@search_schedule');
Route::post('/search-theater','AdminController@search_theater');
Route::post('/search-times','AdminController@search_times');
Route::post('/search-types','AdminController@search_types');
Route::post('/search-customer','AdminController@search_customer');

#Movie Genre
Route::get('/add-genre','MovieGenre@add_genre');
Route::get('/all-genre','MovieGenre@all_genre');
Route::get('/delete-genre/{genre_id}','MovieGenre@delete_genre');
Route::post('/save-genre','MovieGenre@save_genre');
Route::get('/unactive-genre/{genre_id}','MovieGenre@unactive_genre');
Route::get('/active-genre/{genre_id}','MovieGenre@active_genre');
Route::get('/edit-genre/{genre_id}','MovieGenre@edit_genre');
Route::post('/update-genre/{genre_id}','MovieGenre@update_genre');
//gui them 1 bien id sau khi nhan vao thumbs-up hoac thumbs-down

#Movie Format
Route::get('/add-format','MovieFormat@add_format');
Route::get('/all-format','MovieFormat@all_format');
Route::get('/delete-format/{format_id}','MovieFormat@delete_format');
Route::post('/save-format','MovieFormat@save_format');
Route::get('/unactive-format/{format_id}','MovieFormat@unactive_format');
Route::get('/active-format/{format_id}','MovieFormat@active_format');
Route::get('/edit-format/{format_id}','MovieFormat@edit_format');
Route::post('/update-format/{format_id}','MovieFormat@update_format');

#Category Movie
Route::get('/add-movie','CategoryMovie@add_movie');
Route::get('/all-movie','CategoryMovie@all_movie');
Route::get('/edit-movie/{category_movie_id}','CategoryMovie@edit_movie');
Route::get('/delete-movie/{category_movie_id}','CategoryMovie@delete_movie');
Route::post('/save-category-movie','CategoryMovie@save_category_movie');
Route::post('/update-category-movie/{category_movie_id}','CategoryMovie@update_category_movie');
Route::get('/unactive-category-movie/{category_movie_id}','CategoryMovie@unactive');
Route::get('/active-category-movie/{category_movie_id}','CategoryMovie@active');
Route::post('/select-tickets','CategoryMovie@select_tickets');
//gui them 1 bien id sau khi nhan vao thumbs-up hoac thumbs-down

#Times
Route::get('/add-times','Times@add_times');
Route::get('/all-times','Times@all_times');
Route::get('/delete-times/{times_id}','Times@delete_times');
Route::post('/save-times','Times@save_times');
Route::get('/unactive-times/{times_id}','Times@unactive_times');
Route::get('/active-times/{times_id}','Times@active_times');
Route::get('/edit-times/{times_id}','Times@edit_times');
Route::post('/update-times/{times_id}','Times@update_times');

#Chair Types
Route::get('/add-types','ChairTypes@add_types');
Route::get('/all-types','ChairTypes@all_types');
Route::get('/delete-types/{types_id}','ChairTypes@delete_types');
Route::post('/save-types','ChairTypes@save_types');
Route::get('/unactive-types/{types_id}','ChairTypes@unactive_types');
Route::get('/active-types/{types_id}','ChairTypes@active_types');
Route::get('/edit-types/{types_id}','ChairTypes@edit_types');
Route::post('/update-types/{types_id}','ChairTypes@update_types');

#Movie Theater
Route::get('/add-theater','MovieTheater@add_theater');
Route::get('/all-theater','MovieTheater@all_theater');
Route::get('/delete-theater/{theater_id}','MovieTheater@delete_theater');
Route::post('/save-theater','MovieTheater@save_theater');
Route::get('/unactive-theater/{theater_id}','MovieTheater@unactive_theater');
Route::get('/active-theater/{theater_id}','MovieTheater@active_theater');
Route::get('/edit-theater/{theater_id}','MovieTheater@edit_theater');
Route::post('/update-theater/{theater_id}','MovieTheater@update_theater');

#Chair
Route::get('/add-chair','Chair@add_chair');
Route::get('/all-chair','Chair@all_chair');
Route::get('/delete-chair/{chair_id}','Chair@delete_chair');
Route::post('/save-chair','Chair@save_chair');
Route::get('/unactive-chair/{chair_id}','Chair@unactive_chair');
Route::get('/active-chair/{chair_id}','Chair@active_chair');
Route::get('/edit-chair/{chair_id}','Chair@edit_chair');
Route::post('/update-chair/{chair_id}','Chair@update_chair');

#Movie Schedule
Route::get('/add-schedule','MovieSchedule@add_schedule');
Route::get('/all-schedule','MovieSchedule@all_schedule');
Route::get('/delete-schedule/{schedule_id}','MovieSchedule@delete_schedule');
Route::post('/save-schedule','MovieSchedule@save_schedule');
Route::get('/unactive-schedule/{schedule_id}','MovieSchedule@unactive_schedule');
Route::get('/active-schedule/{schedule_id}','MovieSchedule@active_schedule');
Route::get('/edit-schedule/{schedule_id}','MovieSchedule@edit_schedule');
Route::post('/update-schedule/{schedule_id}','MovieSchedule@update_schedule');

//Tickets Book
Route::post('/tickets-book','TicketsBook@tickets_book');
Route::get('/show-tickets','TicketsBook@show_tickets');
Route::post('/save-tickets','TicketsBook@save_tickets');
Route::get('/delete-tickets/{rowId}','TicketsBook@delete_tickets');
Route::get('/update-chair/{chair_id}','TicketsBook@update_chair');
Route::get('/login-checkout','TicketsBook@login_checkout');
Route::get('/logout-checkout','TicketsBook@logout_checkout');
Route::post('/add-customer','TicketsBook@add_customer');
Route::get('/payment','TicketsBook@payment');
Route::post('/login-customer','TicketsBook@login_customer');
Route::get('/checkout','TicketsBook@checkout');
Route::post('/complete', 'TicketsBook@complete');
Route::get('/tickets-management', 'TicketsBook@tickets_management');
Route::get('/view-tickets/{ticketsId}', 'TicketsBook@view_tickets');

//Customer
Route::get('/all-customer','Customer@all_customer');
Route::get('/delete-customer/{customer_id}','Customer@delete_customer');
Route::get('/edit-customer/{customer_id}','Customer@edit_customer');
Route::post('/update-customer/{customer_id}','Customer@update_customer');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');