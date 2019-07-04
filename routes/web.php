<?php

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
    return view('auth/login');
});
Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');
Route::get('/form', function () {
    return view('layouts/form');
});Route::get('/cek', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('contact', 'ContactController', [
  'except' => ['create']
]);
Route::get('api/contact', 'ContactController@apiContact')->name('api.contact');




// ------------------------------------------------------------------
// Route Admin
Route::resource('admin/status', 'StatusController', [
  'except' => ['create'], 
  // 'names' => ['index' => 'admin.index'],
]);
Route::get('api/status', 'StatusController@apiStatus')->name('api.status');

Route::resource('admin/kategori', 'KategoriController', [
  'except' => ['create'],
]);
Route::get('api/kategori', 'KategoriController@apiKategori')->name('api.kategori');

Route::resource('admin/form', 'FormController', [
  'except' => ['create'],
]);
Route::get('api/form', 'FormController@apiform')->name('api.form');


// -----------------------------------------------------------------------




// Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => ['web']], function() {
  Route::get('admin/adminUser','UsersController@index')->name('adminUser');
  Route::POST('admin/addAdminUser','UsersController@addAdminUser')->name('addAdminUser');
  Route::POST('admin/editAdminUser','UsersController@editAdminUser')->name('editAdminUser');;
  Route::POST('admin/deleteAdminUser','UsersController@deleteAdminUser')->name('deleteAdminUser');;
// });

  Route::get('admin/adminForm','FormsController@index')->name('adminForm');
  Route::POST('admin/addAdminForm','FormsController@addAdminForm')->name('addAdminForm');
  Route::POST('admin/editAdminForm','FormsController@editAdminForm')->name('editAdminForm');
  Route::POST('admin/deleteAdminForm','FormsController@deleteAdminForm')->name('deleteAdminForm');
use App\Status;
  Route::get('/posting-delete', function(){
    Status::destroy(11);
  return 'sukses';
});