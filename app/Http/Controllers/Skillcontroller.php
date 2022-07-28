<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Skillcontroller extends Controller
{
    //
    public function create(){

    	$obj = $obj = \App\Models\Skill::first();

    	return view('skill.skill-form',compact('obj'));
    }

    public function update(Request $request){

     $obj = \App\Models\Skill::first();
     $obj->title = $request->title;
     $obj->tools = $request->tools;
     $obj->workflow = $request->workflow;
     $obj->status = $request->status;      /**database field name/form name**/
     $obj->save();

     return redirect()->route('skill.skill-form');
   }
}
