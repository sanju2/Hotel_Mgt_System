<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\MyMail;

class MyMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);
        $myMail = new MyMail(
            $request->input('subject'),
            $request->input('content')
        );


        Mail::to($request->input('email'))->send($myMail);
        return redirect()->back()->with('success', 'Email Send Successfully. to :' . $request->input('email'));
    }
    public function sendMail2(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);
        $myMail = new MyMail(
            $request->input('subject'),
            $request->input('content')
        );


        Mail::to($request->input('email'))->send($myMail);
        return redirect()->back()->with('success', 'Email Send Successfully. to :' . $request->input('email'));
    }
}
