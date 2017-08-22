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
    return view('welcome');
//    echo "test";
//    Mail::to('mhannah@highlands.edu')->send(new \App\Mail\MarketingRequest());
});

//Client
Route::resource('clients', 'ClientsController');
Route::get('clients/thank_you/{id}', 'ClientsController@thankYou');

Route::resource('service_request', 'ServiceRequestController');
Route::get('service_request/thank_you/{id}', 'ServiceRequestController@thankYou');
Route::get('service_request/by_user/{id}', 'ServiceRequestController@byUser');

//Press Release
Route::resource('press_release', 'PressReleaseController');
Route::get('press_release/marcom_show/{id}', 'PressReleaseController@marcomShow');
Route::get('press_release/customer_show/{id}', 'PressReleaseController@customerShow');
Route::get('press_release/request_status/{string}', 'PressReleaseController@requestStatus');
Route::get('press_release/status_show/{id}', 'PressReleaseController@statusShow');

//Design and Printing
Route::resource('design_printing', 'DesignPrintingController');
Route::get('design_printing/marcom_show/{id}', 'DesignPrintingController@marcomShow');
Route::get('design_printing/customer_show/{id}', 'DesignPrintingController@customerShow');
Route::get('design_printing/request_status/{string}', 'DesignPrintingController@requestStatus');
Route::get('design_printing/status_show/{id}', 'DesignPrintingController@statusShow');

//Photography
Route::resource('photography', 'PhotoController');
Route::get('photography/marcom_show/{id}', 'PhotoController@marcomShow');
Route::get('photography/customer_show/{id}', 'PhotoController@customerShow');
Route::get('photography/request_status/{string}', 'PhotoController@requestStatus');
Route::get('photography/status_show/{id}', 'PhotoController@statusShow');

//Videography
Route::resource('videography', 'VideoController');
Route::get('videography/marcom_show/{id}', 'VideoController@marcomShow');
Route::get('videography/customer_show/{id}', 'VideoController@customerShow');
Route::get('videography/request_status/{string}', 'VideoController@requestStatus');
Route::get('videography/status_show/{id}', 'VideoController@statusShow');

//Presentation
Route::resource('presentation', 'PresentationController');
Route::get('presentation/marcom_show/{id}', 'PresentationController@marcomShow');
Route::get('presentation/customer_show/{id}', 'PresentationController@customerShow');
Route::get('presentation/request_status/{string}', 'PresentationController@requestStatus');
Route::get('presentation/status_show/{id}', 'PresentationController@statusShow');

//Social Media
Route::resource('social_media', 'SocialMediaController');
Route::get('social_media/marcom_show/{id}', 'SocialMediaController@marcomShow');
Route::get('social_media/customer_show/{id}', 'SocialMediaController@customerShow');
Route::get('social_media/request_status/{string}', 'SocialMediaController@requestStatus');
Route::get('social_media/status_show/{id}', 'SocialMediaController@statusShow');

//Paid Advertising
Route::resource('paid_advertising', 'PaidAdvertisingController');
Route::get('paid_advertising/marcom_show/{id}', 'PaidAdvertisingController@marcomShow');
Route::get('paid_advertising/customer_show/{id}', 'PaidAdvertisingController@customerShow');
Route::get('paid_advertising/request_status/{string}', 'PaidAdvertisingController@requestStatus');
Route::get('paid_advertising/status_show/{id}', 'PaidAdvertisingController@statusShow');

//Event
Route::resource('event', 'EventController');
Route::get('event/marcom_show/{id}', 'EventController@marcomShow');
Route::get('event/customer_show/{id}', 'EventController@customerShow');
Route::get('event/request_status/{string}', 'EventController@requestStatus');
Route::get('event/status_show/{id}', 'EventController@statusShow');


Route::resource('admin', 'AdminController');

//Service
Route::get('service', 'ServiceController@index');
Route::get('service/{name}', 'ServiceController@serviceName');
Route::get('by_service', 'ServiceController@byService');
//Route::get('testmail', 'ServiceController@testMail');
//Route::get('services_list', 'ServiceController@servicesList')->middleware('auth');
Route::get('services_list', 'ServiceController@servicesList');

//Comments
Route::post('comments/update', 'CommentsController@update');

Route::get('customer', function ()  {
    return view('customer');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('paid_advertising', 'AdminController');

Route::resource('list', 'ListController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
