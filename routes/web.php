<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontCcontroller;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('category', function () {
//     return view('category');
// });

// Route::get('article', function () {
//     return view('article');
// });

// Route::get('admin', function () {
//     return view('backend.index');
// });

// Route::get('viewcategory', function () {
//     return view('backend.category');
// });


 Route::get('/', 'frontCcontroller@index');
 Route::get('article/{slug}', 'frontCcontroller@article');
// Route::get('/', [frontCcontroller::class, 'index']);
 Route::get('category/{slug}', 'frontCcontroller@category');
 Route::get('article', 'frontCcontroller@post');
 Route::get('search-content','frontCcontroller@searchContent');
 Route::get('page/{slug}', 'frontCcontroller@page');
 Route::get('contact-us', 'frontCcontroller@contactUs');
 Route::post('sendmessage', 'crudController@insertData');
     
 Route::get('viewcategory', 'adminController@viewCategory');
 Route::get('patrika-admin', 'adminController@index');
//category
 Route::post('addcategory', 'crudController@insertData');
 Route::get('editcategory/{id}', 'adminController@editCategory');
 Route::post('updatecategory/{id}', 'crudController@updateData');
 Route::post('multipledelete', 'adminController@multipleDelete');

 //settings
 Route::get('settings', 'adminController@settings');
 Route::post('addsettings', 'crudController@insertData');
 Route::post('updatesettings/{id}', 'crudController@updateData');

 //posts
 Route::get('add-post', 'adminController@addPost');
 Route::post('addpost', 'crudController@insertData');
 Route::get('all-posts', 'adminController@allPosts');
 Route::get('editpost/{id}', 'adminController@editPost');
 Route::post('updatepost/{id}', 'crudController@updateData');

 //for pages
Route::get('add-page', 'adminController@addPage');
Route::post('addpage', 'crudController@insertData');
Route::get('all-pages', 'adminController@allPages');
Route::get('editpage/{id}', 'adminController@editPage');
Route::post('updatepage/{id}', 'crudController@updateData');

//for messages
Route::get('messages','adminController@messages');

// for addvertisements
Route::get('add-adv','adminController@addAdv');
Route::post('addadv','crudController@insertData');
Route::get('all-advs', 'adminController@allAdv');
Route::get('editadv/{id}', 'adminController@editAdv');
Route::post('updateadv/{id}','crudController@updateData');


// for authentication
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('logout','HomeController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



