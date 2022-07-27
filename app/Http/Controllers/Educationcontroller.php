<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Educationcontroller extends Controller
{
    //
    public function create(){
 
        $obj = \App\Models\Education::first();

    	return view('education.education-form',compact('obj'));
    }

    public function update(Request $request){

     $obj = \App\Models\Education::first();
     $obj->title = $request->title;
     $obj->univercity = $request->univercity;
     $obj->course = $request->course;  
     $obj->date = $request->date;
     $obj->address = $request->address;
       /**database field name/form name**/
     $obj->save();

     return redirect()->route('education.education-form');
  }
}
