<?php

use Illuminate\Support\Facades\Route;
use App\GroupModel;

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
    return view('welcome');
});

Auth::routes();



Route::get('/blogs', 'HomeController@blogs');
Route::get('/products', 'HomeController@products');
Route::get('/category', 'HomeController@category');
Route::get('/unit', 'HomeController@units');

/*------------------------------------------------------------------------------
				User GroupController
--------------------------------------------------------------------------------*/

Route::get('/user', function () {
  $datas = GroupModel::get();
   return view('admin.user.usermaster',['list' => $datas]);
});

Route::get('/home', 'UsergroupController@show');   //->name('home');
//Route::get('user_list','UsergroupController@show');
Route::post('/store', 'UsergroupController@store');
Route::get('/home_getdata','UsergroupController@usergetdata');
Route::get('/home_edit/{id}','UsergroupController@edituser');
Route::post('/home_update/{id}','UsergroupController@update');
Route::get('/home_delete/{id}','UsergroupController@delete');





/*-------------------------------------------------------------------------------------

-----------------------------------------------------------------------------------*/


Route::get('/group', function () {
    return view('admin.menu.groupmaster');
});



Route::get('/usermenu', function () {
   return view('menu');
});

//Route::get('/user','UserController@show');
Route::get('/show',"UserController@show");
Route::post('/storedata',"UserController@storedata");
Route::get('/getdata',"UserController@getdata");
Route::get('/show/{id}',"UserController@edit");
Route::post('/show_update/{id}',"UserController@update");
Route::get('/show_destroy/{id}',"UserController@destroy");








