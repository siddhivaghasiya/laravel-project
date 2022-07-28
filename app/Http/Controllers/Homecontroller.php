<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //

    public function home(){

    	$getaboutdata  =  \App\Models\About::where('status',1)->first();
    	$getexperience =  \App\Models\Experience::where('status',1)->first();
    	$geteducation =  \App\Models\Education::where('status',1)->first();
    	$getskill =  \App\Models\Skill::where('status',1)->first();
    	$getinterest =  \App\Models\Interest::where('status',1)->first();
    	$getawards =  \App\Models\Award::where('status',1)->first();

    	return view('index',compact('getaboutdata','getexperience','geteducation','getskill','getinterest','getawards'));
    }



}
