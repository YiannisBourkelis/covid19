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
	//return view('forms.show_travel_exclusion_form');
	return redirect(route('show_travel_exclusion_form'));   //'/forms/create/travel_exclusion');
});


Route::get('/statistics', function () {
    	return view('statistics');
})->name('statistics');

Route::get('/about', function () {
    	return view('about');
})->name('about');

Route::post('/forms/print/travel_exclusion', 'TravelExclusionController@print_travel_exclusion_form')->name('print_travel_exclusion_form');
Route::get('/forms/create/travel_exclusion', 'TravelExclusionController@show_travel_exclusion_form')->name('show_travel_exclusion_form');
