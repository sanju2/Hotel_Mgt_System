<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class sendEmailController extends Controller
{
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);
        $sendMail = new sendMail(
            $request->input('subject'),
            $request->input('content')
        );


        Mail::to($request->input('email'))->send($sendMail);
        return redirect()->back()->with('success', 'Email Send Successfully. to :' . $request->input('email'));
    }
}
