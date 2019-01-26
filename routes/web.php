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

Route::get('/', 'PagesController@index');
Route::get('/resendpaystub', 'PagesController@resendpaystub');
Route::get('/support', 'PagesController@support');
//Route::get('/contact', 'PagesController@contact');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/legal', 'PagesController@legal');
Route::get('/faq', 'PagesController@faq');
Route::get('/reviews', 'PagesController@reviews');
Route::resource('reviews', 'ReviewsController');
Route::resource('posts', 'PostsController');
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
/*
Route::get('/demo', function () {
    return new App\Mail\UserWelcome();
});
*/
Route::get('sendmail', 'SendMailController@sendMail');

Auth::routes();

Route::group(['middleware' => 'auth'],function(){
Route::get('/company', 'PagesController@company');
Route::get('/employee', 'PagesController@employee');
Route::get('/reviews/create', 'PagesController@create');
Route::resource('users', 'UsersController');


/***************************
User Profile routes
**/
Route::get('profile/mystubs', 'UsersController@mystubs');
Route::get('/profile', 'UsersController@profile');
Route::get('profile/company', 'UsersController@company');
Route::get('profile/employee', 'UsersController@employee');
Route::post('profile/update', 'UsersController@update_UserProfile')->name('ProfileUpdate');
Route::post('Update/company', 'UsersController@update_Company')->name('UpdateCompany');
Route::post('Update/employee', 'UsersController@update_employee')->name('UpdateEmployee');

Route::get('preview', 'BuildStubController@preview');

/***************************
**/
Route::get('generateStubs', 'PagesController@generateTemplate');
Route::get('/generateStubs/selecttpl', 'PagesController@selecttpl');


Route::get('orders/downloads/{token}/{id}', 'OrderController@downloads');



});



Route::get('/dashboard', 'dashboardController@index')->name('Dashboard');
// ROUTESS THAT ONLY ADMIN USERS CAN USE
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
    Route::get('posts/create', 'PostsController@create');
    Route::get('posts/{id}/edit', 'PostsController@edit');
    Route::get('posts/show', 'PostsController@show');
 });
Route::post('/order/details',			'BuildStubController@orderDetails');
Route::post('/generateStubs/createOrder', 'OrderController@createOrder');
Route::post('/createOrder',             'BuildStubController@createOrder');
Route::post('/payment/stripeCharge',    'OrderController@stripeCharge');
Route::post('/payment',                 'BuildStubController@payment');


