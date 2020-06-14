<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingDController2 extends Controller
{
    public function view()
    {

        $books = DB::table('books')->select('id', 'name', 'phone', 'email', 'place', 'dates')->get();
        return view('bcancel')->with('books', $books);
    }
    public function destroy2($id)
    {
        DB::delete('delete from books where id = ?', [$id]);
        return redirect()->back()->with('mess', 'Booking Cancel Success');
    }
}
