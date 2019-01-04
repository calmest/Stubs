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

/*

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'PagesController@index');
Route::get('/resendpaystub', 'PagesController@resendpaystub');
//Route::get('/services', 'PagesController@services');
Route::get('/support', 'PagesController@support');
Route::get('/contact', 'PagesController@contact');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/legal', 'PagesController@legal');
Route::get('/test', 'PagesController@test');
Route::post('/infoTest', 'PagesController@infoTest');
Route::get('/faq', 'PagesController@faq');
Route::get('/profile', 'PagesController@profile');
//Route::get('/stubs', 'PagesController@stubs');
Route::get('/company', 'PagesController@company');
Route::get('/employee', 'PagesController@employee');
Route::get('/reviews', 'PagesController@reviews');
//Route::get('/generateStubs', 'PagesController@generateStubs');
//Route::get('/paystubs', 'PagesController@paystubs');
//Route::get('/tests', 'PagesController@tests');
//Route::get('/template1', 'PagesController@template1');
//Route::get('/classic', 'PagesController@classic');
Route::get('/', 'PagesController@index');
//Route::get('/selecttpl', 'PagesController@selecttpl');



Route::get('/modern', 'PagesController@modern');
Route::get('/modern2', 'PagesController@modern2');
Route::get('/modern3', 'PagesController@modern3');
Route::get('/classic', 'PagesController@classic');
Route::get('/classic2', 'PagesController@classic2');
Route::get('/classic3', 'PagesController@classic3');
Route::get('/classic4', 'PagesController@classic4');
Route::get('/classic5', 'PagesController@classic5');
Route::get('/classic6', 'PagesController@classic6');
Route::get('/advanced', 'PagesController@advanced');
Route::get('/advanced2', 'PagesController@advanced2');
Route::get('/advanced3', 'PagesController@advanced3');
Route::get('/advanced4', 'PagesController@advanced4');
//Route::get('/details', 'OrderController@details');
//Route::get('/order', 'PagesController@order');

Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');
Route::resource('reviews', 'ReviewsController');
//Route::resource('profiles', 'ProfilesController');
Route::get('profile/mystubs', 'OrderController@mystubs');
Route::get('profile/company', 'OrderController@company');
Route::get('profile/employee', 'OrderController@employee');

Route::get('orders/downloads/{id}', 'OrderController@downloads');

Auth::routes();

Route::get('/dashboard', 'dashboardController@index')->name('Dashboard');

	// ROUTESS THAT ONLY ADMIN USERS CAN USE
	Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
	{
        Route::get('posts/create', 'PostsController@create');
        Route::get('posts/{id}/edit', 'PostsController@edit');
        Route::get('posts/show', 'PostsController@show');
	});
/*
|------------------------------------------------------------------------------------
| BUILDING A GENERATOR STUB
|------------------------------------------------------------------------------------

Route::get('/instant/build/stubs', 		'BuildStubController@index');
Route::get('/stub/template/{id}', 		'BuildStubController@showTemplate');
Route::get('/get/all/stub-template',	'BuildStubController@getAllTemplate');
Route::get('/generate/stub/template',	'BuildStubController@generateStubTemplate');
Route::post('/capture/stubs/shot',		'BuildStubController@captureStubs');
Route::post('/save/stub/image',			'BuildStubController@saveStub');
//Route::get('/modern',					'BuildStubController@modern');
*/

Route::post('/order/details',			'BuildStubController@orderDetails');
Route::post('/createOrder',             'BuildStubController@createOrder');
Route::post('/payment/stripeCharge',    'BuildStubController@stripeCharge');
Route::post('/payment',                 'BuildStubController@payment');


/*
|------------------------------------------------------------------------------------
| CONVERTING HTML TO PDF
|------------------------------------------------------------------------------------
*/

//Route::get('/classicdownload',                 'PDFMakerController@classicdownload');
