<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    public function glog(Request $request)
    {

        $this->validate($request, [
           
            'username' => 'required|max:50|min:3',
            'password' => 'required|max:10|min:3',
            

        ]);


        $username = $request->input('username');
        $password = $request->input('password');

        $data = DB::select('select id from guides where username=? and password=?', [$username, $password]);
        if (count($data)) {
            return redirect('/sglog');
        } else {
            return redirect()->back()->with('message', 'Invalid Username and Password');
        }
    }
}
