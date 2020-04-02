<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeCountryController extends Controller
{
    public function __construct()
    {
        //$this->middleware('Localization', ['except' => 'chage_country']);
    }

    public function ChangeCountry($country, $current_route_name)
	{
        if ($country === 'cyprus'){
            session(['country' => $country]);
        } else {
            session(['country' => '']);
        }
        session()->keep(['country']);
        session()->save();

        return redirect()->route('root_path');
    }
}
