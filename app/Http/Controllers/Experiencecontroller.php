<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Experiencecontroller extends Controller
{
    //
    public function create(){
 
        $obj = \App\Models\Experience::first();

    	return view('experience.experience-form',compact('obj'));
    }

    public function update(Request $request){

     $obj = \App\Models\Experience::first();
     $obj->title = $request->title;
     $obj->position = $request->position;
     $obj->date = $request->date;
     $obj->address = $request->address;
     $obj->description = $request->description;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('experience.experience-form');
}
}
