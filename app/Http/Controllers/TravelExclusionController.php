<?php

namespace App\Http\Controllers;

use GeoIp2\Database\Reader;

use Illuminate\Http\Request;
use App\Helpers\TravelExclusionForm;
use App\Classes\MobileFastDetect;

class TravelExclusionController extends Controller
{
	public function show_travel_exclusion_form(Request $request)
	{
		return view('forms.show_travel_exclusion_form');
	}

	public function print_travel_exclusion_form(Request $request)
	{
		$travelExclusionForm = new TravelExclusionForm;
		$travelExclusionForm->inputYpografon = $request->get('inputYpografon');
		$travelExclusionForm->inputBirthdate = $request->get('inputBirthdate');
		$travelExclusionForm->inputAddress = $request->get('inputAddress');
		$travelExclusionForm->inputPlace = $request->input('inputPlace');
		$travelExclusionForm->inputTravelTime = $request->input('inputTravelTime');
		$travelExclusionForm->inputTravelDate = $request->input('inputTravelDate');
    	$travelExclusionForm->customCheckFarmakeio = $request->has('customCheckFarmakeio');
		$travelExclusionForm->customCheckMarket = $request->has('customCheckMarket');
		$travelExclusionForm->customCheckBank = $request->has('customCheckBank');
		$travelExclusionForm->customCheckHelp = $request->has('customCheckHelp');
		$travelExclusionForm->customCheckTeleti = $request->has('customCheckTeleti');
		$travelExclusionForm->customCheckGym = $request->has('customCheckGym');
	
		//$myfullname = $request->get('inputYpografon');
	  return view('forms.print_travel_exclusion_form')->with('travelExclusionForm', $travelExclusionForm);
	}
}
