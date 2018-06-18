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
    return view('KYC.kyc');
});

Route::get('/success', function () {
    return view('KYC.success');
});

Route::get('/duplicate', function () {
    return view('KYC.duplicate');
});

Route::post('/submit', "KYCController@validateKyc");

Route::get('/wund', 'KycCheckController@index')->name('kyccheck');

// Route::post('/status', 'KycCheckController@updateStatus');
Route::post('/note', 'KycCheckController@updateNote');
Route::get('/next/{id}', 'KycCheckController@getNext')->name('getnext');
Route::get('/previous/{id}', 'KycCheckController@getPrevious')->name('getprevious');
Route::get('/approve/{id}', 'KycCheckController@ApproveStatus')->name('kyc.approve');
Route::get('/pending/{id}', 'KycCheckController@PendingStatus')->name('kyc.pending');
Route::get('/reject/{id}', 'KycCheckController@RejectStatus')->name('kyc.reject');
Route::get('/refresh', 'KycCheckController@refresh')->name('kyc.refresh');
Route::get('/getpending', 'KycCheckController@getPending')->name('kyc.getpending');

