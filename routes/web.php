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

/*
Route::group(['middleware' => 'throttle:5,1'], function() {
});
*/

Route::get('/', function () { return redirect(route('_show_travel_exclusion_form'));})->name('root_path');
Route::get('/statistics', function () { return view('statistics');})->name('_statistics');
Route::get('cyprus/statistics', function () { return view('statistics');})->name('cyprus_statistics');
Route::get('/about', function () { return view('about');})->name('_about');
Route::get('cyprus/about', function () { return view('about');})->name('cyprus_about');
Route::get('/useful', function (){return view('useful');})->name('_useful');
Route::get('cyprus/useful', function (){return view('useful');})->name('cyprus_useful');
Route::post('/forms/print/travel_exclusion', 'TravelExclusionController@print_travel_exclusion_form')->name('print_travel_exclusion_form');
Route::post('cyprus/forms/print/travel_exclusion', 'TravelExclusionController@cyprus_print_travel_exclusion_form')->name('cyprus_print_travel_exclusion_form');
Route::get('/forms/create/travel_exclusion', 'TravelExclusionController@show_travel_exclusion_form')->name('_show_travel_exclusion_form');
Route::get('cyprus/forms/create/travel_exclusion', 'TravelExclusionController@show_cyprus_travel_exclusion_form')->name('cyprus_show_travel_exclusion_form');

Route::get('change_country/{country}/{current_route_name}', 'ChangeCountryController@ChangeCountry')->name('change_country');

//Route::get('{locale}/forms/create/travel_exclusion', 'TravelExclusionController@show_travel_exclusion_form')->name('cy_show_travel_exclusion_form');