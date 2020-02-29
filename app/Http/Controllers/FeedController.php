<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index(){
        return view('feedback');
    }
    public function store(Request $request){
        //validation part
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|max:50|min:5',
            'text' => 'required|max:1000|min:10',
        ]);
        $feed = new Feedback();
        
            $feed -> name =    $request ->name;
            
            $feed -> email =  $request->email;
            $feed -> text = $request->text;
            

           

            $feed -> save();
            return redirect()->back()->with('message','Feedback Send Success');
    }
}
