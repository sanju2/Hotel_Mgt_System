<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class bookingCancelController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from reservations');
        return view('bookrcancel', ['users' => $users]);
    }
    public function destroy($id)
    {
        DB::delete('delete from reservations where id = ?', [$id]);
        return redirect()->back()->with('message', 'Cancel Successfully');
    }
}
