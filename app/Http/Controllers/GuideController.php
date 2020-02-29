<?php

namespace App\Http\Controllers;
use App\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index(){
        return view('guide_signup');
    }
    public function store(Request $request){

        
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'gender' => 'required',

            'nic' => 'required|max:10',
            'mobileno' => 'required|max:10',
            'email' => 'required',
            'username' => 'required|max:50|min:3',
            'password' => 'required|max:10|min:3',
            'conpassword' => 'required|max:10|min:3',
            'image' => 'required',

        ]);

        $guide = new Guide();
        /*image upload code
        $guide->image = $request->input('image');
        // Set other properties

        $file = $request->file('image');
        $filename = $file->getClientOriginalName(); 
        $file->storeAs('public', $filename);

        $guide->image = $filename; */
            

        	$guide -> first_name =    $request -> fname;
            $guide -> last_name =   $request->lname;
            $guide -> dob =   $request->dob;
            $guide -> gender =  $request->gender;
            $guide -> guidequalifications = $request->qualifi;
            $guide -> nic = $request->nic;
            $guide -> mobileno = $request->mobileno;
            $guide -> email =  $request->email;
            $guide -> username = $request->username;
            $guide -> password =  $request->password;
            $guide -> conpassword =    $request->conpassword;
           

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); //get image
                $filename = time() . '.' . $extension;
                $file->move('uploads/guide/', $filename);
                $guide->image = $filename;
            }

            $guide -> save();
            return redirect()->back()->with('message','Register Success');
    }
    
}
