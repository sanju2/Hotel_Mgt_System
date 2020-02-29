<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\fooditem;
use App\User;


//my routes
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/gallery', function () {
    return view('gallery');
});

//feedback routes
Route::get("feedback", 'FeedController@index');
Route::post("feed", 'FeedController@store');
Route::get('/feed', function () {
    return view('feedback');
});



//booking routes
Route::get('/book', function () {
    return view('booking');
});
Route::get("booking", 'BookController@index');
Route::post("/book", 'BookController@store');

//employee details
Route::get('/emp', function () {
    return view('employee_details');
});

//paypage

Route::get('/pay', function () {
    return view('pay');
});
Route::post('/', function (Request $request) {
    \Stripe\Stripe::setApiKey('sk_test_jaXjNcbn3pLsh7vkAKpvRwF8');
    try {
        \Stripe\Charge::create(array(
            "amount" => 300 * 100,
            "currency" => "usd",
            "source" => $request->input('stripeToken'), // obtained with Stripe.js
            "description" => "Test payment."
        ));
        Session::flash('success-message', 'Payment done successfully !');
        return Redirect::back();
    } catch (\Exception $e) {
        Session::flash('fail-message', "Error! Please Try again.");
        return Redirect::back();
    }
});

//guide profile update page

Route::get('/guidepage', 'GuideProfileController@display');

Route::get('/edit/{id}', 'GuideProfileController@edit');

Route::put('/updateimage/{id}', 'GuideProfileController@update');

Route::get('/deleteimage/{id}', 'GuideProfileController@delete');


//guide register login
Route::get('/greg', function () {
    return view('guide_signup');
});
Route::get("guide_signup", 'GuideController@index');
Route::post("/greg", 'GuideController@store');
Route::get('/glog', function () {
    return view('guide_login');
});
Route::post('/glog', 'LoginController@glog');
Route::get('/sglog', function () {
    return view('guidedash');
});
Route::get('/sglog', 'ViewController@index'); /*guide details view*/


/* admin auth 
Route::get('admin/home','AdminController@index');

Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login);
Route::post('admin-password/email','Admin\ForgotPasswordController@sendsResetLinkEmail') ->name ('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm') ->name ('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm') ->name ('admin.password.reset');
*/


