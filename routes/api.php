<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login-patient', 'ApiController@User_Login')->name('userlogin');
Route::post('/create-patient', 'ApiController@Create_Patient')->name('createpatient');
Route::post('/app-landing', 'ApiController@App_Landing')->name('App_Landing');
Route::post('/doctor-byid', 'ApiController@Doctor_By_ID')->name('doctor-by-id');
Route::post('/book-appointment', 'ApiController@Book_Appointment')->name('doctor-appointment');
Route::post('/user-appointments', 'ApiController@User_Appointments')->name('all-doctor-appointment');
Route::get('/specialities', 'ApiController@Get_Specialities')->name('get-specialities');
Route::post('/doctorby-speciality', 'ApiController@Doctors_By_Speciality')->name('doctorby-specialities');
Route::post('/get-nurses', 'ApiController@Get_Nurses')->name('list-nurses');
Route::post('/upload-prescription', 'ApiController@Upload_Prescription')->name('upload-prescription');

Route::post('/search-drug', 'ApiController@Search_Drugs')->name('search-drug-byname');
Route::post('/create-order', 'ApiController@Create_Order')->name('create-manual-order');
Route::post('/get-orders', 'ApiController@Get_Orders')->name('get-orders');
Route::post('/get-userdata', 'ApiController@Get_UserData')->name('get-userdata');
Route::post('/update-user', 'ApiController@Update_User')->name('update-user-data');

//Get_Specialities



