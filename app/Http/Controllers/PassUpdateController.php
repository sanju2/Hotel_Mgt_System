<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PassUpdateController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from guides');
        return view('guide.guide_login', ['users' => $users]);
    }
    public function show($id)
    {
        $users = DB::select('select * from guides where id = ?', [$id]);
        return view('guide.passchangeupdate', ['users' => $users]);
    }
    public function edit(Request $request, $id)
    {
        $pass = $request->input('password');
        DB::update('update guides set password = ? where id = ?', [$pass, $id]);
        return redirect()->back()->with('message', 'Password changed succesfully..Login again');
    }
}
