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
Route::get('/user-detail','DashboardController@viewUserDetail');
// SHOW WEB-COMPANY-DATATABLE
Route::get('/web-company','DashboardController@viewWebCompany');
// CREATE WEB -COMPANY
Route::post('/create-web-company','DashboardController@createWebCompany');
// SHOW TESTIMONI-DATATABLE
Route::get('/testimoni','DashboardController@viewTestimoni');
// UPDATE WEB -COMPANY
Route::put('/update-web-company/{company}','DashboardController@updateWebCompany');

Route::get('/getCompanyById/{id}', 'CompanyController@getCompanyByIndex');

Route::get('/templatecompany', function () {
    return view('admin.templatecompany');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
