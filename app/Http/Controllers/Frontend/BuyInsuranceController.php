<?php

namespace App\Http\Controllers\Frontend;

use App\CoronaFamily;
use App\CoronalPolicy;
use App\CovidInsurance;
use App\Http\Controllers\Controller;
use App\PropertyInsurance;
use App\PropertyPolicy;
use App\ThirdParty;
use App\ThirdPartyPolicy;
use App\TravelInsurace;
use App\TravelPolicy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BuyInsuranceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.pages.claim-renew');
    }

    //Property Insurance Buy//

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function property(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $properties = new PropertyInsurance;
            $properties->name = $data['name'];
            $properties->address = $data['address'];
            $properties->district = $data['district'];
            $properties->lgus = $data['lgus'];
            $properties->tole = $data['tole'];
            $properties->ward_no = $data['ward_no'];
            $properties->phone_no = $data['phone_no'];
            $properties->dob = $data['dob'];
            $properties->email = $data['email'];
            $properties->father_name = $data['father_name'];
            $properties->grand_father_name = $data['grand_father_name'];
            $properties->vat_pan_no = $data['vat_pan_no'];
            $properties->citizenship_no = $data['citizenship_no'];
            $properties->citizenship_issued_date = $data['citizenship_issued_date'];
            $properties->citizenship_issued_place = $data['citizenship_issued_place'];
            $properties->pp_image = $data['pp_image'];
            $properties->citizen_doc = $data['citizen_doc'];
            $properties->citizen_back = $data['citizen_back'];
            $properties->save();
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function policy(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            $policies = new PropertyPolicy;
            $policies->owner_name = $data['owner_name'];
            $policies->districts = $data['districts'];
            $policies->address = $data['address'];
            $policies->location_nature = $data['location_nature'];
            $policies->building_stories = $data['building_stories'];
            $policies->construction_class = $data['construction_class'];
            $policies->pool = $data['pool'];
            $policies->value_property = $data['value_property'];
            $policies->remarks = $data['remarks'];
            $policies->image = $data['image'];
            $policies->policy_effective = $data['policy_effective'];
            $policies->policy_expiry = $data['policy_expiry'];
            $policies->save();
            return redirect()->back();
        }

    }

    //Covid-19 Insurance Buy//


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function corona(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $covids = new CovidInsurance;
            $covids->name = $data['name'];
            $covids->address = $data['address'];
            $covids->district = $data['district'];
            $covids->lgus = $data['lgus'];
            $covids->tole = $data['tole'];
            $covids->ward_no = $data['ward_no'];
            $covids->phone_no = $data['phone_no'];
            $covids->dob = $data['dob'];
            $covids->email = $data['email'];
            $covids->father_name = $data['father_name'];
            $covids->grand_father_name = $data['grand_father_name'];
            $covids->vat_pan_no = $data['vat_pan_no'];
            $covids->citizenship_no = $data['citizenship_no'];
            $covids->citizenship_issued_date = $data['citizenship_issued_date'];
            $covids->citizenship_issued_place = $data['citizenship_issued_place'];
            $covids->pp_image = $data['pp_image'];
            $covids->citizen_doc = $data['citizen_doc'];
            $covids->citizen_back = $data['citizen_back'];
            $covids->save();
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function policyCorona(Request $request)
    {
        $data = $request->all();
        $corona = CoronalPolicy::create([
            'policy_type' => $data['policy_type'],
            'policy_plan' => $data['policy_plan'],
            'number_family' => $data['number_family'],
            'policy_effective' => $data['policy_effective']
        ]);
        if (count($request->sfull_name) > 0) {
            foreach ($request->sfull_name as $item => $v) {
                $data2 = array(
                    'corona_id' => $corona->id,
                    'full_name' => $request->sfull_name[$item],
                    'age' => $request->sage[$item],
                    'relations' => $request->srelations[$item],
                );
                CoronaFamily::insert($data2);
            }
        }
        return redirect()->back();
    }

    //Travel Insurance Buy//

    public function travel(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $travels = new TravelInsurace;
            $travels->name = $data['name'];
            $travels->address = $data['address'];
            $travels->district = $data['district'];
            $travels->lgus = $data['lgus'];
            $travels->tole = $data['tole'];
            $travels->ward_no = $data['ward_no'];
            $travels->phone_no = $data['phone_no'];
            $travels->dob = $data['dob'];
            $travels->email = $data['email'];
            $travels->father_name = $data['father_name'];
            $travels->grand_father_name = $data['grand_father_name'];
            $travels->vat_pan_no = $data['vat_pan_no'];
            $travels->citizenship_no = $data['citizenship_no'];
            $travels->citizenship_issued_date = $data['citizenship_issued_date'];
            $travels->citizenship_issued_place = $data['citizenship_issued_place'];
            $travels->pp_image = $data['pp_image'];
            $travels->citizen_doc = $data['citizen_doc'];
            $travels->citizen_back = $data['citizen_back'];
            $travels->save();
            return redirect()->back();
        }
    }

    public function travelPolicy(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $travelPolicy = new TravelPolicy;
            $travelPolicy->passport_number = $data['passport_number'];
            $travelPolicy->place_visit = $data['place_visit'];
            $travelPolicy->occupation = $data['occupation'];
            $travelPolicy->doctors_name = $data['doctors_name'];
            $travelPolicy->doctor_address = $data['doctor_address'];
            $travelPolicy->contact_number = $data['contact_number'];
            $travelPolicy->age = $data['age'];
            $travelPolicy->days = $data['days'];
            $travelPolicy->rate = $data['rate'];
            $travelPolicy->plan = $data['plan'];
            $travelPolicy->cover = $data['cover'];
            $travelPolicy->image = $data['image'];
            $travelPolicy->policy_date = $data['policy_date'];
            $travelPolicy->save();
            return redirect()->back();
        }
    }

    //Third Party //
    public function thirdParty(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $thirdParty = new ThirdParty;
            $thirdParty->name = $data['name'];
            $thirdParty->address = $data['address'];
            $thirdParty->district = $data['district'];
            $thirdParty->lgus = $data['lgus'];
            $thirdParty->tole = $data['tole'];
            $thirdParty->ward_no = $data['ward_no'];
            $thirdParty->phone_no = $data['phone_no'];
            $thirdParty->dob = $data['dob'];
            $thirdParty->email = $data['email'];
            $thirdParty->father_name = $data['father_name'];
            $thirdParty->grand_father_name = $data['grand_father_name'];
            $thirdParty->vat_pan_no = $data['vat_pan_no'];
            $thirdParty->citizenship_no = $data['citizenship_no'];
            $thirdParty->citizenship_issued_date = $data['citizenship_issued_date'];
            $thirdParty->citizenship_issued_place = $data['citizenship_issued_place'];
            $thirdParty->pp_image = $data['pp_image'];
            $thirdParty->citizen_doc = $data['citizen_doc'];
            $thirdParty->citizen_back = $data['citizen_back'];
            $thirdParty->save();
            return redirect()->back();
        }
    }

    public function thirdPolicy(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $thirdParty = new ThirdPartyPolicy;
            $thirdParty->motor_type = $data['motor_type'];
            $thirdParty->cubic_capacity = $data['cubic_capacity'];
            $thirdParty->pool = $data['pool'];
            $thirdParty->year = $data['year'];
            $thirdParty->pradesh_zone = $data['pradesh_zone'];
            $thirdParty->lot_no = $data['lot_no'];
            $thirdParty->vechile_type = $data['vechile_type'];
            $thirdParty->vechile_id = $data['vechile_id'];
            $thirdParty->brand = $data['brand'];
            $thirdParty->model = $data['model'];
            $thirdParty->chasis = $data['chasis'];
            $thirdParty->engine = $data['engine'];
            $thirdParty->images = $data['images'];
            $thirdParty->policy_effective = $data['policy_effective'];
            $thirdParty->save();
            return redirect()->back();
        }
    }
}
