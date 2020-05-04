<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        // return $request;
        Nexmo::message()->send([
            'to' => '94' . $request->mobile,
            'from' => '16105552344',
            'text' => 'Your food order is on the way....'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/foodorders');
    }
}
