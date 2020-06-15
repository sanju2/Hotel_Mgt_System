<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class cusDeleteController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');
        return view('cus_delete', ['users' => $users]);
    }
    public function destroy($id)
    {
        DB::delete('delete from users where id = ?', [$id]);
        return redirect()->back()->with('message', 'Customer Deactivate Success');
    }
}
