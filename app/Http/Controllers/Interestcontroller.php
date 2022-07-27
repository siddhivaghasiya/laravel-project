<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Interestcontroller extends Controller
{
    //
    public function create(){
        
       $obj = \App\Models\Interest::first();
    
       return view('interest.interest-form',compact('obj'));
    }

    public function update(Request $request){

     $obj = \App\Models\Interest::first();
     $obj->title = $request->title;
     $obj->description = $request->description;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('interest.interest-form');
}
}
