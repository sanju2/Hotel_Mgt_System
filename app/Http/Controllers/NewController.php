<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newss;
class NewController extends Controller
{
   // public function index(){

       // return view('news');

  //  }

    public function saved(Request $request){


        $news=new newss();
        $news->Description=$request->input('Description');

        $news->save();
        $data=newss::all();
       // dd($data);

        return view('news')->with('news',$data);
    }

    public function deletenews($id){
        $news=newss::find($id);
        $news->delete();

        return redirect()->back();
    }

    public function updatenewsview($id){
        $news=newss::find($id);

        return view('updatenews')->with('taskdata',$news);


    }

    public function updatenews(Request $request){

       // dd($request);
       $id=$request->id;
       $news=$request->news;
       $data=newss::find($id);
       $data->Description=$news;
       $data->save();

       $data=newss::all();

       //return redirect()->back();
      return view('news')->with('news',$data);
    }

    public function display(){

        $news=newss::all();
        return view('newsform')->with('news',$news);
    }
}
