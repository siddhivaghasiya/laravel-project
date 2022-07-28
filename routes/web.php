<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// about
Route::get('about','\App\Http\Controllers\Aboutcontroller@create')->name('about.about-form');

Route::post('about/update','\App\Http\Controllers\Aboutcontroller@update')->name('about.update-about-form');

// experience

Route::get('experience','\App\Http\Controllers\Experiencecontroller@create')->name('experience.experience-form');

Route::any('experience/update','\App\Http\Controllers\experiencecontroller@update')->name('experience.update-experience-form');

 //education

Route::get('education','\App\Http\Controllers\Educationcontroller@create')->name('education.education-form');

Route::post('education','\App\Http\Controllers\Educationcontroller@update')->name('education.education-update-form');

// skills

Route::get('skill','\App\Http\Controllers\Skillcontroller@create')->name('skill.skill-form');

Route::post('skill','\App\Http\Controllers\Skillcontroller@update')->name('skill.skill-update-form');

// interest

Route::get('interest','\App\Http\Controllers\Interestcontroller@create')->name('interest.interest-form');

Route::post('interest','\App\Http\Controllers\Interestcontroller@update')->name('interest.interest-update-form');

// award

Route::get('award','\App\Http\Controllers\Awardcontroller@create')->name('award.award-form');

Route::post('award','\App\Http\Controllers\Awardcontroller@update')->name('award.award-update-form');



Route::get('/','\App\Http\Controllers\Homecontroller@home')->name('index');
