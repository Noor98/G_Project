<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});
Route::get("/admin/category/{id}/delete","Admin\CategoryController@destroy");
Route::get("/admin/category/{id}/status","Admin\CategoryController@status");
Route::resource("/admin/category","Admin\CategoryController");


Route::get("/admin/restaurant/{id}/delete","Admin\RestaurantController@destroy");
Route::get("/admin/restaurant/{id}/status","Admin\RestaurantController@status");
Route::get("/admin/restaurant/{id}/allowcomment","Admin\RestaurantController@allowcomment");
Route::resource("/admin/restaurant","Admin\RestaurantController");

Route::get("/admin/meal/{id}/delete","Admin\MealController@destroy");
Route::get("/admin/meal/{id}/status","Admin\MealController@status");
Route::resource("/admin/meal","Admin\MealController");

Route::resource("/admin/admin","Admin\AdminController");
Route::get("/admin/admin/{id}/delete","Admin\AdminController@destroy");
Route::get("/admin/admin/{id}/permission","Admin\AdminController@permission");
Route::post("/admin/admin/{id}/setpermission","Admin\AdminController@setpermission");
Route::get("/admin/admin/{id}/status","Admin\AdminController@status");


Route::resource("/admin/slider","Admin\SliderController");
Route::get("/admin/slider/{id}/delete","Admin\SliderController@destroy");
Route::get("/admin/slider/{id}/status","Admin\SliderController@status");


Route::resource("/admin/comment","Admin\CommentController");
Route::get("/admin/comment/{id}/delete","Admin\CommentController@destroy");
Route::get("/admin/comment/{id}/status","Admin\CommentController@status");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'Admin\HomeController@index');
Route::get('/admin/home/noaccess', 'Admin\HomeController@noaccess');
Route::get('/home/restaurants', 'HomeController@restaurants');
Route::get('/home/meals', 'HomeController@meals');
Route::get('/home/restaurant/{id}', 'HomeController@restaurant');
Route::get('/home/meal/{id}', 'HomeController@meal');
Route::post('/home/restaurant/{id}', 'HomeController@postcomment');
Route::get('/home/about', 'HomeController@about');

//Route::get('/chef/{id}', 'HomeController@chef');

//Route::post('/home/article/{id}', 'HomeController@postcomment');

Route::get('/contact', function(){
    return view('contact');
});

Route::post('/contact', function(Request $request){
    
    Mail::send(new ContactMail($request));
    return redirect('/');
});



//Route::get('/test' ,'TestController@index' );



