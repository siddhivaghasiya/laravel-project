<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Awardcontroller extends Controller
{
    //
    public function create(){
        
       $obj = \App\Models\Award::first();
    
       return view('award.award-form',compact('obj'));
    }

    public function update(Request $request){

     $obj = \App\Models\Award::first();
     $obj->title = $request->title;
     $obj->description = $request->description;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('award.award-form');
   }
}
