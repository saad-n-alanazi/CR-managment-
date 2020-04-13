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

/*
Route::get('/', function () {
    return view('MainPage');
});

*/
Route::get('/', 'MainPageController@mainPge' );
Route::resource('/baskets' , 'basketsContreoller'); 
Route::get('/delivered' , 'MainPageController@delivered')->name('delivered');
Route::get('/notDelivered' , 'MainPageController@notDelivered')->name('notDelivered');
Route::get('/barcode/{id}' , 'BarcodeController@barcode')->name('barcode');
Route::get('/barcodeResult/{id}' , 'BarcodeController@barcodeResult')->name('barcodeResult');
Route::get('/resultUpdate/{id}' , 'BarcodeController@resultUpdate')->name('resultUpdate');
