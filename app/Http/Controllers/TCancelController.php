<?php

namespace App\Http\Controllers;
use App\TourC;
use Illuminate\Http\Request;

class TCancelController extends Controller
{
  public function index(){
      return view('bcancel');
  }

  public function store(Request $request){

    $crud = new TourC;
           $crud->to =  $request->get('to');
            $crud->phone =  $request->get('phone');

           $crud->save();
          return redirect()->back()->with('mess','Tour Cancel Request Send');
  }


}
