<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingDController extends Controller
{
    public function index()
    {


        $getbooksde = DB::table('books')->select('id', 'name', 'phone', 'email', 'place', 'dates')->get();
        $getagentn = DB::table('guides')->select('id', 'first_name', 'last_name', 'nic', 'mobileno', 'email')->get();
        $tourr = DB::table('canceltdetails')->select('id', 'to', 'phone')->get();
        return view('mailview')->with('getbooksde', $getbooksde)->with('getagentn', $getagentn)->with('tourr', $tourr);
    }
    public function destroy($id)
    {
        DB::delete('delete from books where id = ?', [$id]);
        return redirect()->back()->with('mess', 'Tour Cancel Success');
    }
}
