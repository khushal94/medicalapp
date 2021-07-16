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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lang/{locale}', 'HomeController@lang');


//Patients
Route::get('/patient/create', 'PatientController@create')->name('patient.create');
Route::post('/patient/create', 'PatientController@store')->name('patient.store');
Route::get('/patient/all', 'PatientController@all')->name('patient.all');
Route::get('/patient/view/{id}', 'PatientController@view')->where('id', '[0-9]+')->name('patient.view');
Route::get('/patient/edit/{id}', 'PatientController@edit')->where('id', '[0-9]+')->name('patient.edit');
Route::post('/patient/edit', 'PatientController@store_edit')->name('patient.store_edit');

//Nurses
Route::get('/nurse/create', 'NurseController@create')->name('nurse.create');
Route::post('/nurse/create', 'NurseController@store')->name('nurse.store');
Route::get('/nurse/all', 'NurseController@all')->name('nurse.all');
Route::get('/nurse/view/{id}', 'NurseController@view')->where('id', '[0-9]+')->name('nurse.view');
Route::get('/nurse/edit/{id}', 'NurseController@edit')->where('id', '[0-9]+')->name('nurse.edit');
Route::post('/nurse/edit', 'NurseController@store_edit')->name('nurse.store_edit');
Route::get('/nurse/update/{id}/{status}', 'NurseController@update')->name('nurse.update');

//Doctors
Route::get('/doctor/create', 'DoctorController@create')->name('doctor.create');
Route::post('/doctor/create', 'DoctorController@store')->name('doctor.store');
Route::get('/doctor/all', 'DoctorController@all')->name('doctor.all');
Route::get('/doctor/view/{id}', 'DoctorController@view')->where('id', '[0-9]+')->name('doctor.view');
Route::get('/doctor/edit/{id}', 'DoctorController@edit')->where('id', '[0-9]+')->name('doctor.edit');
Route::post('/doctor/edit', 'DoctorController@store_edit')->name('doctor.store_edit');
Route::get('/doctor/update/{id}/{status}', 'DoctorController@update')->name('doctor.update');


//Coupons
Route::get('/coupon/create', 'CouponController@create')->name('coupon.create');
Route::post('/coupon/create', 'CouponController@store')->name('coupon.store');
Route::get('/coupon/all', 'CouponController@all')->name('coupon.all');
Route::get('/coupon/view/{id}', 'CouponController@view')->where('id', '[0-9]+')->name('coupon.view');
Route::get('/coupon/edit/{id}', 'CouponController@edit')->where('id', '[0-9]+')->name('coupon.edit');
Route::post('/coupon/edit', 'CouponController@store_edit')->name('coupon.store_edit');
Route::get('/coupon/update/{id}/{status}', 'CouponController@update')->name('coupon.update');

//Orders
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::post('/order/create', 'OrderController@store')->name('order.store');
Route::get('/order/all', 'OrderController@all')->name('order.all');
Route::get('/order/view/{id}', 'OrderController@view')->where('id', '[0-9]+')->name('order.view');
Route::get('/order/edit/{id}', 'OrderController@edit')->where('id', '[0-9]+')->name('order.edit');
Route::post('/order/edit', 'OrderController@store_edit')->name('order.store_edit');
Route::get('/order/update/{id}/{status}', 'OrderController@update')->name('order.update');

//Package
Route::get('/package/create', 'PackageController@create')->name('package.create');
Route::post('/package/create', 'PackageController@store')->name('package.store');
Route::get('/package/all', 'PackageController@all')->name('package.all');
Route::get('/package/view/{id}', 'PackageController@view')->where('id', '[0-9]+')->name('package.view');
Route::get('/package/edit/{id}', 'PackageController@edit')->where('id', '[0-9]+')->name('package.edit');
Route::post('/package/edit', 'PackageController@store_edit')->name('package.store_edit');
Route::get('/package/update/{id}/{status}', 'PackageController@update')->name('package.update');

//Nurse Booking
Route::get('/nursebooking/create', 'NurseBookingController@create')->name('nursebooking.create');
Route::post('/nursebooking/create', 'NurseBookingController@store')->name('nursebooking.store');
Route::get('/nursebooking/all', 'NurseBookingController@all')->name('nursebooking.all');
Route::get('/nursebooking/view/{id}', 'NurseBookingController@view')->where('id', '[0-9]+')->name('nursebooking.view');
Route::get('/nursebooking/edit/{id}', 'NurseBookingController@edit')->where('id', '[0-9]+')->name('nursebooking.edit');
Route::post('/nursebooking/edit', 'NurseBookingController@store_edit')->name('nursebooking.store_edit');
Route::get('/nursebooking/update/{id}/{status}', 'NurseBookingController@update')->name('nursebooking.update');

//Speciality
Route::get('/speciality/create', 'SpecialityController@create')->name('speciality.create');
Route::post('/speciality/create', 'SpecialityController@store')->name('speciality.store');
Route::get('/speciality/all', 'SpecialityController@all')->name('speciality.all');
Route::get('/speciality/view/{id}', 'SpecialityController@view')->where('id', '[0-9]+')->name('speciality.view');
Route::get('/speciality/edit/{id}', 'SpecialityController@edit')->where('id', '[0-9]+')->name('speciality.edit');
Route::post('/speciality/edit', 'SpecialityController@store_edit')->name('speciality.store_edit');
Route::get('/speciality/update/{id}/{status}', 'SpecialityController@update')->name('speciality.update');


//Appointments
Route::get('/appointment/create', 'AppointmentController@create')->name('appointment.create');
Route::post('/appointment/create', 'AppointmentController@store')->name('appointment.store');
Route::get('/appointment/all', 'AppointmentController@all')->name('appointment.all');
Route::get('/appointment/checkslots/{id}','AppointmentController@checkslots')->where('id', '[0-9]+');
Route::get('/appointment/delete/{id}','AppointmentController@destroy')->where('id', '[0-9]+');
Route::post('/appointment/edit', 'AppointmentController@store_edit')->name('appointment.store_edit');
Route::get('/appointment/update/{id}/{status}', 'AppointmentController@update')->name('appointment.update');

//Drugs
Route::get('/drug/create', 'DrugController@create')->name('drug.create');
Route::post('/drug/create', 'DrugController@store')->name('drug.store');
Route::get('/drug/edit/{id}', 'DrugController@edit')->where('id', '[0-9]+')->name('drug.edit');
Route::post('/drug/edit', 'DrugController@store_edit')->name('drug.store_edit');
Route::get('/drug/all', 'DrugController@all')->name('drug.all');
Route::get('/drug/delete/{id}','DrugController@destroy');


//Tests
Route::get('/test/create', 'TestController@create')->name('test.create');
Route::post('/test/create', 'TestController@store')->name('test.store');
Route::get('/test/edit/{id}', 'TestController@edit')->name('test.edit');
Route::post('/test/edit', 'TestController@store_edit')->name('test.store_edit');
Route::get('/test/all', 'TestController@all')->name('test.all');
Route::get('/test/delete/{id}', 'TestController@destroy')->where('id', '[0-9]+');

//Prescriptions
Route::get('/prescription/create', 'PrescriptionController@create')->name('prescription.create');
Route::post('/prescription/create', 'PrescriptionController@store')->name('prescription.store');
Route::get('/prescription/all', 'PrescriptionController@all')->name('prescription.all');
Route::get('/prescription/view/{id}', 'PrescriptionController@view')->where('id', '[0-9]+')->name('prescription.view');
Route::get('/prescription/pdf/{id}','PrescriptionController@pdf')->where('id', '[0-9]+');
Route::get('/prescription/delete/{id}','PrescriptionController@destroy');

//Billing
Route::get('/billing/create', 'BillingController@create')->name('billing.create');
Route::post('/billing/create', 'BillingController@store')->name('billing.store');
Route::get('/billing/all', 'BillingController@all')->name('billing.all');
Route::get('/billing/view/{id}', 'BillingController@view')->where('id', '[0-9]+')->name('billing.view');
Route::get('/billing/pdf/{id}','BillingController@pdf')->where('id', '[0-9]+');
Route::get('/billing/delete/{id}','BillingController@destroy');

// Payment
Route::get('/payment/all', 'PaymentController@index')->name('payment.all');

// Lab Bookings
Route::get('/labbooking/all', 'LabbookingController@index')->name('labbooking.all');

// Ambulance Bookings
Route::get('/ambulance/all', 'AmbulanceBookingController@index')->name('ambulance.all');

// Rating
Route::get('/rating/all', 'ReviewRatingController@all')->name('rating.all');
Route::get('/rating/update/{id}/{status}', 'ReviewRatingController@update')->name('rating.update');

//Settings
/* Doctorino Settings */
Route::get('/settings', 'SettingController@doctorino_settings')->name('settings.edit');
Route::post('/settings', 'SettingController@doctorino_settings_store')->name('settings.store');
/* Prescription Settings */
Route::get('/settings/prescription_settings', 'SettingController@prescription_settings')->name('prescription_settings.edit');
Route::post('/settings/prescription_settings', 'SettingController@prescription_settings_store')->name('prescription_settings.store');

/*Excel import export*/
Route::post('/drug/import', 'DrugController@import')->name('drug.import');