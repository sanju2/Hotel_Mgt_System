<?php

use Illuminate\Http\Request;
use App\Http\Controllers\salaryController;
use Illuminate\Support\Facades\Input;
use App\fooditem;
use App\Reservation;
use App\User;


//lasantha sanju routes
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
Route::get('/bookss', function () {
    return view('booking');
});
Route::get("booking", 'BookController@index');
Route::post("/books", 'BookController@store');



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

//guide profile update 

Route::get('/guidepage', 'GuideProfileController@display');

Route::get('/edit/{id}', 'GuideProfileController@edit');

Route::put('/updateimage/{id}', 'GuideProfileController@update');

Route::get('/deleteimage/{id}', 'GuideProfileController@delete');


//guide register login
Route::get('/greg', function () {
    return view('guide.guide_signup');
});
Route::get("guide_signup", 'GuideController@index');
Route::post("/greg", 'GuideController@store');
Route::get('/glog', function () {
    return view('guide.guide_login');
});
Route::post('/glog', 'LoginController@glog');
Route::get('/sglog', function () {
    return view('guide.guidedash');
});
Route::get('/sglog', 'ViewController@index'); /*guide details view*/


//password changed
Route::get('/glog', 'PassUpdateController@index');
Route::get('editt/{id}', 'PassUpdateController@show');
Route::post('edit/{id}', 'PassUpdateController@edit');

//retrive data
Route::get('view-records', 'TourViewController@index');

//Mail Sending
Route::get('/mail', function () {
    return view('mailview');
});
Route::post('/mail', 'MyMailController@sendMail');

//booking deatisl retriew
Route::get('/mail', 'BookingDController@index');

//cancel booking
Route::get('delete/{id}', 'BookingDController@destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////
//gasa routes
Route::get('/news', function () {
    $data = App\newss::all();
    return view('news')->with('news', $data);
});

Route::get('/deletenews/{id}', 'NewController@deletenews');
Route::get('/updatenews/{id}', 'NewController@updatenewsview');
Route::post('/updatenewss', 'NewController@updatenews');


Route::post('/news', 'NewController@saved')->name('addnews');

Route::get('/newspage', 'NewController@display');

/////////navodya routes


Route::get('/master', function () {
    return view('master');
});











Route::resource('product', 'itemController');



Route::get('/food', function () {
    return view('food');
});

Route::get('/food', 'itemController@foodview');




Route::get('/viewfood', function () {
    return view('viewfood');
});





Route::post('/saveCategory', 'categoryController@store')->name('saveCategory');


Route::post('/saveItem', 'itemController@itemstore')->name('saveItem');

Route::get('/viewfood', 'itemController@display');
Route::get('/food/delete/{food}', 'itemController@destroy');








Route::get('/editimage/{id}', 'itemController@edit');

Route::post('/editimage/{id}', 'itemController@update');


Route::get('/customerview1', function () {
    return view('customerview1');
});

Route::get('/item', [
    'uses' => 'itemController@getIndex',
    'as' => 'product.index'
]);
Route::get('/items/fetch_data', 'ItemfilterController@fetch_data')->name('membersfrontdata');
Route::get('item/{cat}', 'itemController@proCat');


Route::get('/add-to-cart/{id}', [
    'uses' => 'itemController@getAddToCart',
    'as' => 'product.AddToCart'


]);
Route::get('/shopping-cart', [
    'uses' => 'itemController@getCart',
    'as' => 'product.shoppingCart'


]);


Route::get('/checkout', [
    'uses' => 'itemController@getCheckout',
    'as' => 'checkout'


]);

Route::post('/checkout', [
    'uses' => 'itemController@postCheckout',
    'as' => 'checkout'


]);






Route::get('/paymentnew', function () {
    return view('paymentnew');
});


Route::get('/payment', function () {
    return view('payment');
});






Route::post('/paycheck', [
    'uses' => 'MyStripeController@pay',
    'as' => 'paycheck'



]);

Route::view('addCategory', 'admin.addCategory');

Route::view('cats', 'admin.cats', [
    'data' => App\cats::all()

]);

Route::post('saveCategory', 'itemController@saveCategory')->name('saveCategory');


Route::get('test', function () {
    return App\fooditem::with('cats')->get();
});



//products by ajax with cat id
Route::get('productsCat', 'itemController@productsCat');

Route::get('/foodorders', 'itemController@displayorder');


// Route::get('/sms', function () {
//     return view('sms');
// });

Route::post('foodorders', 'itemController@sendSms');


///sinidu routes---------------------------------------------


Route::get('/h', function () {
    return view('Green_Mount'); //home page accomadation
});

Route::get('/online_reservation', function () {
    $data = App\room_type::all();

    //return view('online_reservation');

    return view('online_reservation')->with(['rt' => $data]);
});


Route::get('/room_management', function () {
    $data = App\room::all();
    $data1 = App\room_type::all();

    //return view('room_management')->with('rooms', $data);
    //return view('room_management');

    return view('room_management')->with(['rooms' => $data, 'dat' => $data1]);
});

Route::get('/room_type_management', function () {
    $data = App\room_type::all();
    //$dat = App\room::all();

    //$count = room::where('t_id', '=', )->count();

    return view('room_type_management')->with('room_types', $data);

    //return view('room_type_management')->with(['room_types' => $data, 'dat' => $dat]);
});

Route::get('/room_reservation_management', function () {
    $data = App\reserve::all();
    $data1 = App\customer::all();
    $data2 = App\room_type::all();

    return view('room_reservation_management')->with(['reservations' => $data, 'dat' => $data1, 'rt' => $data2]);
});

Route::get('/room_reports', function () {
    return view('room_reports');
});


Route::post('/reserve_online', 'RoomController@reserve_online');

Route::post('/add_room_reservation', 'RoomController@add_reservation');


Route::post('/add_room', 'RoomController@add_room');

Route::post('/add_room_type', 'RoomController@add_room_type');


Route::post('/rooms/{id}', 'RoomController@delete_room');

Route::post('/room_types/{id}', 'RoomController@delete_room_type');

Route::post('/reserves/{id}', 'RoomController@delete_room_reservation');


Route::get('/view_room/{id}', 'RoomController@view_room');

Route::get('/view_type/{id}', 'RoomController@view_room_type');

Route::get('/view_reserves/{id}', 'RoomController@view_room_reservation');


Route::get('/update_room/{id}', 'RoomController@update_room');

Route::get('/update_room_type/{id}', 'RoomController@update_room_type');

Route::get('/update_room_reservation/{id}', 'RoomController@update_room_reservation');


Route::post('/edit_room', 'RoomController@edit_room');

Route::post('/edit_room_type', 'RoomController@edit_room_type');

Route::post('/edit_room_reservation', 'RoomController@edit_room_reservation');


Route::post('/search_room', 'RoomController@search_room');

Route::post('/search_room_type', 'RoomController@search_room_type');

Route::post('/search_room_reservation', 'RoomController@search_room_reservation');


Route::get('/main', function () {
    return view('main');
});

Route::get('/standard-room', [
    'as' => 'standard_room',
    'uses' => 'CustomerController@standard_room'

]);
Route::get('/deluxe-room', [
    'as' => 'deluxe_room',
    'uses' => 'CustomerController@deluxe_room'

]);
Route::get('/suite-room', [
    'as' => 'suite_room',
    'uses' => 'CustomerController@suite_room'

]);
Route::get('/book', [
    'as' => 'book',
    'uses' => 'CustomerController@book'
]);

Route::post('/book/request', [
    'as' => 'request',
    'uses' => 'CustomerController@request'
]);
Route::get('/login', [
    'as' => 'login',
    'uses' => 'AuthController@login'

]);
Route::post('/loginCheck', [
    'as' => 'loginCheck',
    'uses' => 'AuthController@loginCheck'
]);
Route::get('/staff-standard', [
    'as' => 'staff',
    'uses' => 'StaffController@main'
]);
Route::get('/staff', [
    'as' => 'index',
    'uses' => 'StaffController@index'
]);
Route::get('/staff-deluxe', [
    'as' => 'deluxe',
    'uses' => 'StaffController@deluxe'
]);
Route::get('/staff-suite', [
    'as' => 'suite',
    'uses' => 'StaffController@suite'
]);
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'StaffController@logout'
]);
Route::post('checkdata', function (\Illuminate\Http\Request $request) {
    $checkdata = Reservation::where('rooms', $request['room'])->where('type', $request['type'])->where('checkin', $request['checkin']);
    if ($checkdata->count() == 1) {
        return response()->json(true);
    } else {
        return response()->json(false);
    }
})->name('checkdata');

Route::get('/reservation/{customer_id}/{flag}', [
    'as' => 'reservation',
    'uses' => 'CustomerController@reservation'
]);


// tharindu jayasighe HR Management


Route::get('/Eadd', function () {
    return view('Employee_add');
});

Route::get('/Esalary', function () {
    return view('Employee_salary');
});
Route::post('calmonsalary', 'salaryController@store');

Route::get('/Eattendence', function () {
    return view('Employee_attendence');
});

Route::get('/Eleave', function () {
    return view('Employee_leave');
});

Route::get('/ERleave', function () {
    return view('ErequestedLeave');
});

Route::get('/Emanagement', function () {
    return view('Employee_management');
});

Route::get('/Eprofile', function () {
    return view('Employee_profile');
});

Route::get('/Eprofile2', function () {
    return view('Employee_');
});

Route::get('/Eaddleave', function () {
    return view('Employee_add_leaveType');
});

Route::get('/Edelete', function () {
    return view('EmpDelete');
});


//Route::post('/addLeave' , 'LeaveTypeController@leave');

Route::post('/addLeave', 'LeaveTypeController@save');

Route::get('/Eaddleave', 'LeaveTypeController@index');

Route::get('/des/{id}', 'LeaveTypeController@destroy');


Route::post('/AddEmployee', 'EmployeeController@store');

Route::get('/Emanagement', 'EmployeeController@index');

Route::get('/search', 'EmployeeController@search');

Route::get('/Edelete', 'EmployeeController@showDeleteEmp');


Route::get('/show/{id}', 'EmployeeController@show');

//Route::post('/getid','EmployeeController@getid');

Route::get('/destroye/{leve_type}', 'EmployeeController@destroy');

Route::post('/edit', 'EmployeeController@edit');


//Route::get('Employee_view','EmployeeController@getid');


Route::post('/addleave', 'LeaveController@store');
Route::post('/sendleave', 'LeaveController@storea');

Route::get('/Eleave', 'LeaveController@index');

Route::get('/ERleave', 'LeaveController@indexR');


Route::get('/search2', 'LeaveController@search2');

Route::get('/destroyl/{id}', 'LeaveController@destroy');


Route::post('/store', 'attendenceController@store');

//Route::e('/Eattendence' , 'attendenceController');

//Route::get('/Eattendence','EmployeeController@attendence');

Route::get('/Eattendence', 'attendenceController@index');

Route::post('/storeA', 'attendenceController@storeA');

Route::get('/destroya/{id}', 'attendenceController@destroy');


Route::get('/Esalary', 'salaryController@employee');

Route::post('/Esalary', 'salaryController@salary');

Route::get('/destroy/{id}', 'salaryController@destroy');

//Route::post('form', 'LeaveTypeController@save')->name('form.save');


Route::get('/hr', function () {
    return view('welcome');
});


Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/home', function () {
        return view('AdminD');
    });

    Route::get('/home', function () {
        if (Auth::user()->admin == 0) {
            return view('home');
        } else {
            $users['users'] = User::all();
            return view('AdminD')->with('users');
        }
    });
});


Route::get('pdfview', array('as' => 'pdfview', 'uses' => 'EmployeeController@pdfview'));

Route::post('/EmployeeDetailsPdf', array('as' => 'EmployeeDetailsPdf', 'uses' => 'EmployeeController@EmployeeDetailsPdf'));


//chart maker

Route::get('/EChart', function () {
    return view('EmployeeChart');
});
Route::get('EChart', 'EmployeeChartController@index');
Route::post('/Echart', 'EmployeeChartController@store');

Route::get('/MChart', function () {
    return view('EMonthChart');
});
Route::get('/MChart', 'EmployeeChartController@day');
Route::post('/Mchart', 'EmployeeChartController@day');


Route::get('/ESChart', function () {
    return view('EsalaryChart');
});

Route::get('/ESChart', 'EmployeeChartController@salaryR');

Route::get('/sss', 'EmployeeChartController@regdate');
Route::post('/date', 'EmployeeChartController@register');

//Route::post("/dailyAttDetailsPdf", 'attendenceController@dailyattPdf');
Route::post('/dailyAttDetailsPdf', array('as' => 'dailyattPdf', 'uses' => 'attendenceController@dailyattPdf'));

Route::get('/pdf', function () {
    return view('Dailyattendance');
});


Route::get('/vv', 'attendenceController@pdf');

Route::get('/MTsalary', 'salaryController@getData');
Route::get('/dessalary/{id}', 'salaryController@getDatadelete');


//Route::get('/sss' ,'EmployeeChartController@salaryR');





// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
