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
//INDEX PAGE
Route::get('/','CompanyController@index');

//------------------ ADMIN DASHBOARD---------------------------
//PAGE DASHBOARD
Route::get('/dashboard','DashboardController@index');
// USER DETAIL
Route::get('/user-detail','DashboardController@showUserDetail');
// SHOW WEB -COMPANY
Route::get('/web-company','DashboardController@showWebCompany');
// CREATE WEB -COMPANY
Route::post('/create-web-company','DashboardController@createWebCompany');
// UPDATE WEB -COMPANY
Route::put('/update-web-company/{company}','DashboardController@updateWebCompany');

Route::get('/templatecompany', function () {
    return view('admin.templatecompany');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
