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


Auth::routes();

Route::get('/', 'FrontendController@index');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/about-us', 'FrontendController@aboutus');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/AjoutEtudiant','StudentController@displayform');
Route::post('/add_data','StudentController@save');
Route::get('/admin/viewstudent','StudentController@viewform');
Route::get('/admin/viewstudent','StudentController@index'); 
Route::get('/click_edit','StudentController@edit_function');
Route::get('/click_delete/{stud_email}','StudentController@delete_function');


