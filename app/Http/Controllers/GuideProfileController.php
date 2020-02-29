<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

class GuideProfileController extends Controller
{


    public function display()
    {
        $guides = Guide::all();
        return view('guideform')->with('guides', $guides);
    }
   

    public function edit($id)
    {
        $guides = Guide::find($id);
        return view('guideupdateform')->with('guides', $guides);
    }

    public function update(Request $request, $id)
    {
        $guides = Guide::find($id);

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'guidequalifications' => 'required|max:200|min:15',
            'nic' => 'required|max:10',
            'mobileno' => 'required|max:10',
            'email' => 'required',
            'username' => 'required|max:50|min:3',
            'password' => 'required|max:10|min:3',
            'conpassword' => 'required|max:10|min:3',
            'image' => 'required',

        ]);


        $guides->first_name = $request->input('fname');
        $guides->last_name = $request->input('lname');
        $guides->dob = $request->input('dob');
        $guides->gender = $request->input('gender');
        $guides->guidequalifications = $request->input('guidequalifications');
        $guides->nic = $request->input('nic');
        $guides->mobileno = $request->input('mobileno');
        $guides->email = $request->input('email');
        $guides->username = $request->input('username');
        $guides->password = $request->input('password');
        $guides->conpassword = $request->input('conpassword');


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //get image
            $filename = time() . '.' . $extension;
            $file->move('uploads/guide/', $filename);
            $guides->image = $filename;
        }

        $guides->save();

        //return redirect('/guidepage')->with('guides', $guides);
        return redirect()->back()->with('message','Account Update Successfully');
    }
    public function delete($id)
    {
        $guides = Guide::find($id);
        $guides->delete();

        return redirect('/index');
    }
}
