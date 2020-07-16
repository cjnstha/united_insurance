<?php

namespace App\Http\Controllers\Admin;

use App\CoronaFamily;
use App\CoronalPolicy;
use App\PersonalDetails;
use App\PropertyPolicy;
use App\ThirdPartyPolicy;
use App\TravelPolicy;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyInsuranceController extends Controller
{
    public function index()
    {
        $buys = PersonalDetails::all();
        return view('admin.buy.index', compact('buys'));
    }

    public function view($id)
    {
        $buys = PersonalDetails::with('thirdParty', 'property', 'corona', 'travel')->findOrFail($id);
        return view('admin.buy.view', compact('buys'));
    }

    public function print($id)
    {
        $buys = PersonalDetails::with('thirdParty', 'property', 'corona', 'travel')->findOrFail($id);
        return view('admin.buy.view', compact('buys'));
    }
}
