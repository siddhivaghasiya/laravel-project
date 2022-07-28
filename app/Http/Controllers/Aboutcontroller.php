<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    //
    public function create(){
        
       $obj = \App\Models\About::first();
    
       return view('about.about-form',compact('obj'));
    }

    public function update(Request $request){

     $obj = \App\Models\About::first();
     $obj->title = $request->title;
     $obj->address = $request->address;
     $obj->description = $request->description;     /**database field name/form name**/
     $obj->status = $request->status;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('about.about-form');
}
}
