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
        //validation part
        $data = request()->validate([
            'name' => 'required|min:3',
            'phoneno' => 'required|max:10',
            'place' => 'required|max:50|min:5',
            'dates' => 'required|max:10',
        ]); 

        $book = new Book();

        $book->name =    $request->name;

        $book->phoneno =  $request->pno;
        $book->place = $request->place;
        $book->dates = $request->dates;




        $book->save();
        return redirect('/pay');
        return redirect()->back()->with('message','Booking Successfully');
    }
}
