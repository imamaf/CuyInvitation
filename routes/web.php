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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/','CompanyController@index');

//INDEX PAGE
Route::get('/detailproduk/{id}','DetailProdukController@getTemplateDetail');

Route::get('/templatecompany','AdminTemplateCompany@index');
Route::get('/companyTemplate/{id}', 'AdminTemplateCompany@getTemplateById');

Route::put('/companyTemplate/{id}', 'AdminTemplateCompany@updateTemplate');

Route::post('/addCompanyTemplate', 'AdminTemplateCompany@addTemplate');

Route::delete('/deleteCompanyTemplate/{template_company}', 'AdminTemplateCompany@deleteTemplate');

//----------------------------- ADMIN DASHBOARD ---------------------------
//PAGE DASHBOARD
Route::get('/dashboard','DashboardController@index');
// ---------------------------- ROUTER PAGE USER DASHBOARD ----------------
// VIEW LIST USER MEMBER DATATABLE
Route::get('/list-user','DashboardController@viewListUser');

Route::get('/getUserById/{id}', 'DashboardController@getUserByIndex');
// UPDATE LIST-USER
Route::put('/update-list-user/{user}','DashboardController@updateListUser');
// DELETE LIST-USER
Route::delete('/delete-list-user/{user}','DashboardController@deleteListUser');

// USER DETAIL
Route::get('/user-detail','DashboardController@viewUserDetail');

// ---------------------------- ROUTER PAGE COMPANY DASHBOARD ----------------
// VIEW WEB-COMPANY-DATATABLE
Route::get('/web-company','DashboardController@viewWebCompany');
// CREATE WEB -COMPANY
Route::post('/create-web-company','DashboardController@createWebCompany');
// GET BY ID
Route::get('/getCompanyById/{id}', 'DashboardController@getCompanyByIndex');
// UPDATE WEB -COMPANY
Route::put('/update-web-company/{company}','DashboardController@updateWebCompany');
// DELETE WEB-COMPANY
Route::delete('/delete-web-company/{company}','DashboardController@deleteWebCompany');


// ---------------------------- ROUTER PAGE TESTIMONI DASHBOARD ----------------
// VIEW TESTIMONI-DATATABLE
Route::get('/testimoni','TestimoniController@viewTestimoni');
//GET BY ID
Route::get('/getTestimoniById/{id}', 'TestimoniController@getTestimoniByIndex');
// UPDATE TESTIMONI
Route::post('/create-testimoni','TestimoniController@addTestimoni');
Route::put('/update-testimoni/{testimoni}','TestimoniController@updateTestimoni');
// DELETE TESTIMONI
Route::delete('/delete-testimoni/{testimoni}','TestimoniController@deleteTestimoni');

// ---------------------------- ROUTER PAGE TEMPLATE CUSTOMER DASHBOARD ----------------
// VIEW  TEMPLATE CUSTOMER-DATATABLE
Route::get('/template-customer','AdminTemplateCustomerController@viewTemplateCustomer');
//GET BY ID
Route::get('/getTemplateCustomerById/{id}', 'AdminTemplateCustomerController@getTemplateCustomerByIndex');
//GET FOTO GALLERY BY ID
Route::get('/getFotoGalleryById/{id}', 'GalleryController@getGalleryByTemplateId');
// UPDATE  TEMPLATE CUSTOMER
Route::post('/update-template-customer/{template_customer}','AdminTemplateCustomerController@updateTemplateCustomer');
Route::post('/add/template-customer','AdminTemplateCustomerController@addTemplateCustomer');
Route::delete('/delete-template-customer/{template_customer}', 'AdminTemplateCustomerController@deleteTempateCustomer');

// ---------------------------- SEARCH ------------------
Route::get('/filter-design', 'CompanyController@filterDesign');

// ------------------------- TEMPLATE CLIENT ----------------

Route::get('/design_C01/{search_cust_pria}-{search_cust_wanita}', 'TemplateCustomerController@get_template_1');
Route::get('/design_C01', 'TemplateCustomerController@index_tempalet_1');
Route::get('/design_C02', 'TemplateCustomerController@index_tempalet_2');
Route::get('/design_C02/{search_cust_pria}-{search_cust_wanita}', 'TemplateCustomerController@get_template_2');
Route::get('/design_C03', 'TemplateCustomerController@index_tempalet_3');
Route::get('/design_C03/{search_cust_pria}-{search_cust_wanita}', 'TemplateCustomerController@get_template_3');
Route::get('/design_C04', 'TemplateCustomerController@index_tempalet_4');

// KOMENTAR
Route::get('/komentar-ucapan','KomentarController@datatable');
Route::post('/add-komentar', 'KomentarController@addKomentar');
Route::get('/approve-komentar', 'KomentarController@approveKomentar');
Route::delete('/delete-komentar/{komentar}', 'KomentarController@deleteKomentar');

// Route::get('/design_C02', function () {
//     return view('product_design.design_C02');
// });
// Route::get('/design_C03', function () {
//     return view('product_design.design_C03');
// });


Auth::routes();

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any','.*');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

//NEW INDEX PAGE
Route::get('/indexbaru', function() {
    return view('indexbaru');
});