<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','PagesController@getHome');
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/contact','PagesController@getContact');
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/gallery','PagesController@getGallery');
Route::get('/about','PagesController@getAbout');
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/gallery', function () {
//     return view('gallery');
// });


Route::get('/nominations','NominationController@getNominations');
Route::post('nominations/submit','NominationController@submit');
Route::get('nomination/{id}','NominationController@show');

Route::get('/contacts','ContactMaintenanceController@getContact');
Route::post('contact/submit','ContactMaintenanceController@submit');
// Route::get('getContactView/{id}','ContactMaintenanceController@getContactView');
Route::get('edit/{id}','ContactMaintenanceController@show');
Route::get('/main','MainController@index');
Route::post('/main/checkLogin','MainController@checkLogin');
Route::get('/main/successLogin','MainController@successLogin');
Route::get('/main/logout','MainController@logout');
