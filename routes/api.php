<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['cors'])->group(function () {


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
Route::post('/my-prescriptions', 'ApiController@Get_Recent_Prescriptions')->name('getmy-prescription');


Route::post('/search-drug', 'ApiController@Search_Drugs')->name('search-drug-byname');
Route::post('/create-order', 'ApiController@Create_Order')->name('create-manual-order');
Route::post('/get-orders', 'ApiController@Get_Orders')->name('get-orders');
Route::post('/get-userdata', 'ApiController@Get_UserData')->name('get-userdata');
Route::post('/update-user', 'ApiController@Update_User')->name('update-user-data');
Route::get('/get-app-coupons', 'ApiController@Get_App_Coupons')->name('get-coupons');
Route::get('/get-lab-tests', 'ApiController@Get_Lab_Test')->name('get-tests');

Route::get('/get-packages', 'ApiController@Get_Packages')->name('get-packages');
Route::post('/create-labbooking', 'ApiController@Create_LabBooking')->name('create-lab-booking');
Route::post('/get-labtest-orders', 'ApiController@LabTest_Orders')->name('orders-lab-booking');
Route::post('/nurse-booking', 'ApiController@Create_NurseBooking')->name('book-nurse');
Route::post('/get-nurse-bookings', 'ApiController@Get_NurseBooking')->name('get-book-nurse');


Route::post('/get-conversations', 'ApiController@Get_User_Chats')->name('get-chats');
Route::post('/send-chat-msg', 'ApiController@Send_Msg')->name('send-chat-message');

// });


