<?php

namespace App\Http\Controllers;


use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('booking');
    }
    public function store(Request $request)
    {


        $book = new Book();

        $book->name =    $request->name;

        $book->phone =  $request->phone;
        $book->email =  $request->email;
        $book->place = $request->place;
        $book->dates = $request->dates;
        $book->guide = $request->guide;




        $book->save();
        return redirect('/pay');
        return redirect()->back()->with('message', 'Booking Successfully');
    }
}
