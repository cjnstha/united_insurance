<?php

namespace App\Http\Controllers\Frontend;

use App\CoronaFamily;
use App\CoronalPolicy;
use App\CovidInsurance;
use App\Http\Controllers\Controller;
use App\PersonalDetails;
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
    //Property Insurance Buy//

    public function createProperty()
    {
        return view('frontend.pages.property_insurance');
    }

    public function storeProperty(Request $request)
    {
        if ($request->hasfile('pp_image')) {
            $image = $request->file('pp_image');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 1);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $image1 = $photo_original_name_doc;
        }
        if ($request->hasfile('citizen_doc')) {
            $image = $request->file('citizen_doc');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 2);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_doc = $photo_original_name_doc;
        }

        if ($request->hasfile('citizen_back')) {
            $image = $request->file('citizen_back');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 3);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_back = $photo_original_name_doc;
        }

        if (request()->hasFile('image')) {
            foreach (request()->file('image') as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                // Get Just Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get Just ext
                $extension = $file->getClientOriginalExtension();
                // Filename To Store
                $images = $filename . '_' . time() . '.' . $extension;
                // Uplopad the image
                $path = $file->storeAs('public/images/policies', $images);
                $picture[] = $images;
            }
        } else {
            $picture = '';
        }

        $property = PersonalDetails::create([
            'insurance_type' => request('insurance_type'),
            'name' => request('name'),
            'address' => request('address'),
            'district' => request('district'),
            'lgus' => request('lgus'),
            'tole' => request('tole'),
            'ward_no' => request('ward_no'),
            'phone_no' => request('phone_no'),
            'dob' => request('dob'),
            'email' => request('email'),
            'father_name' => request('father_name'),
            'grand_father_name' => request('grand_father_name'),
            'vat_pan_no' => request('vat_pan_no'),
            'citizenship_no' => request('citizenship_no'),
            'citizenship_issued_date' => request('citizenship_issued_date'),
            'citizenship_issued_place' => request('citizenship_issued_place'),
            'pp_image' => $image1,
            'citizen_doc' => $citizen_doc,
            'citizen_back' => $citizen_back,
        ]);
        PropertyPolicy::create([
            'personal_id' => $property->id,
            'owner_name' => request('owner_name'),
            'districts' => request('districts'),
            'address' => request('address'),
            'location_nature' => request('location_nature'),
            'building_stories' => request('building_stories'),
            'construction_class' => request('construction_class'),
            'pool' => request('pool'),
            'value_property' => request('value_property'),
            'remarks' => request('remarks'),
            'image' => (empty($picture)) ? null : json_encode($picture),
            'policy_effective' => request('policy_effective'),
            'policy_expiry' => request('policy_expiry'),
        ]);
        return redirect('/buy-renew/property');
    }


    //Corona Insurance//

    public function createCorona()
    {
        return view('frontend.pages.corona-insurance');
    }

    public function storeCorona(Request $request)
    {
        if ($request->hasfile('pp_image')) {
            $image = $request->file('pp_image');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 1);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $image2 = $photo_original_name_doc;
        }
        if ($request->hasfile('citizen_doc')) {
            $image = $request->file('citizen_doc');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 2);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_doc = $photo_original_name_doc;
        }

        if ($request->hasfile('citizen_back')) {
            $image = $request->file('citizen_back');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 3);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_back = $photo_original_name_doc;
        }

        $coronas = PersonalDetails::create([
            'insurance_type' => request('insurance_type'),
            'name' => request('name'),
            'address' => request('address'),
            'district' => request('district'),
            'lgus' => request('lgus'),
            'tole' => request('tole'),
            'ward_no' => request('ward_no'),
            'phone_no' => request('phone_no'),
            'dob' => request('dob'),
            'email' => request('email'),
            'father_name' => request('father_name'),
            'grand_father_name' => request('grand_father_name'),
            'vat_pan_no' => request('vat_pan_no'),
            'citizenship_no' => request('citizenship_no'),
            'citizenship_issued_date' => request('citizenship_issued_date'),
            'citizenship_issued_place' => request('citizenship_issued_place'),
            'pp_image' => $image2,
            'citizen_doc' => $citizen_doc,
            'citizen_back' => $citizen_back,
        ]);
        $corona = CoronalPolicy::create([
            'personal_id' => $coronas->id,
            'policy_type' => request('policy_type'),
            'policy_plan' => request('policy_plan'),
            'number_family' => request('number_family'),
            'policy_effective' => request('policy_effective')
        ]);
        if (count($request->sfull_name) > 0) {
            foreach ($request->sfull_name as $item => $v) {
                $data2 = array(
                    'corona_id' => $corona->id,
                    'full_name' => $v,
                    'age' => $request->sage[$item],
                    'relations' => $request->srelations[$item],
                );
                CoronaFamily::insert($data2);
            }
        }
        return redirect('/buy-renew/corona-insurance');
    }

    //Travel Insurance//
    public function createTravel()
    {
        return view('frontend.pages.travel-insurance');
    }

    public function storeTravel(Request $request)
    {

        if ($request->hasfile('pp_image')) {
            $image = $request->file('pp_image');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 1);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $pp_image = $photo_original_name_doc;
        }
        if ($request->hasfile('citizen_doc')) {
            $image = $request->file('citizen_doc');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 2);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_doc = $photo_original_name_doc;
        }

        if ($request->hasfile('citizen_back')) {
            $image = $request->file('citizen_back');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 3);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_back = $photo_original_name_doc;
        }

        if (request()->hasFile('image')) {
            foreach (request()->file('image') as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                // Get Just Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get Just ext
                $extension = $file->getClientOriginalExtension();
                // Filename To Store
                $images = $filename . '_' . time() . '.' . $extension;
                // Uplopad the image
                $path = $file->storeAs('public/images/policies', $images);
                $source[] = $images;
            }
        } else {
            $source = '';
        }
        $travels = PersonalDetails::create([
            'insurance_type' => request('insurance_type'),
            'name' => request('name'),
            'address' => request('address'),
            'district' => request('district'),
            'lgus' => request('lgus'),
            'tole' => request('tole'),
            'ward_no' => request('ward_no'),
            'phone_no' => request('phone_no'),
            'dob' => request('dob'),
            'email' => request('email'),
            'father_name' => request('father_name'),
            'grand_father_name' => request('grand_father_name'),
            'vat_pan_no' => request('vat_pan_no'),
            'citizenship_no' => request('citizenship_no'),
            'citizenship_issued_date' => request('citizenship_issued_date'),
            'citizenship_issued_place' => request('citizenship_issued_place'),
            'pp_image' => $pp_image,
            'citizen_doc' => $citizen_doc,
            'citizen_back' => $citizen_back
        ]);
        TravelPolicy::create([
            'personal_id' => $travels->id,
            'passport_number' => request('passport_number'),
            'place_visit' => request('place_visit'),
            'occupation' => request('occupation'),
            'doctors_name' => request('doctors_name'),
            'doctor_address' => request('doctor_address'),
            'contact_number' => request('contact_number'),
            'age' => request('age'),
            'days' => request('days'),
            'rate' => request('rate'),
            'plan' => request('plan'),
            'cover' => request('cover'),
            'image' => (empty($source)) ? null : json_encode($source),
            'policy_date' => request('policy_date'),
        ]);
        return redirect('/buy-renew/travel');
    }

    //Third Party//
    public function createThird()
    {
        return view('frontend.pages.third-insurance');
    }

    public function thirdParty(Request $request)
    {

        if ($request->hasfile('pp_image')) {
            $image = $request->file('pp_image');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 1);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $pp_image = $photo_original_name_doc;
        }
        if ($request->hasfile('citizen_doc')) {
            $image = $request->file('citizen_doc');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 2);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_doc = $photo_original_name_doc;
        }

        if ($request->hasfile('citizen_back')) {
            $image = $request->file('citizen_back');
            $ext = $image->getClientOriginalExtension();
            $destination = 'images/buy';
            $photo_name = md5(time() + 3);
            $photo_original_name_doc = $destination . '/' . $photo_name . '.' . $ext;
            $image->move($destination, $photo_original_name_doc); //images/  images/encdata.exc
            $citizen_back = $photo_original_name_doc;
        }

        if (request()->hasFile('image')) {
            foreach (request()->file('image') as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                // Get Just Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get Just ext
                $extension = $file->getClientOriginalExtension();
                // Filename To Store
                $images = $filename . '_' . time() . '.' . $extension;
                // Uplopad the image
                $path = $file->storeAs('public/images/policies', $images);
                $source[] = $images;
            }
        } else {
            $source = '';
        }
        $thirds = PersonalDetails::create([
            'insurance_type' => request('insurance_type'),
            'name' => request('name'),
            'address' => request('address'),
            'district' => request('district'),
            'lgus' => request('lgus'),
            'tole' => request('tole'),
            'ward_no' => request('ward_no'),
            'phone_no' => request('phone_no'),
            'dob' => request('dob'),
            'email' => request('email'),
            'father_name' => request('father_name'),
            'grand_father_name' => request('grand_father_name'),
            'vat_pan_no' => request('vat_pan_no'),
            'citizenship_no' => request('citizenship_no'),
            'citizenship_issued_date' => request('citizenship_issued_date'),
            'citizenship_issued_place' => request('citizenship_issued_place'),
            'pp_image' => $pp_image,
            'citizen_doc' => $citizen_doc,
            'citizen_back' => $citizen_back
        ]);
        ThirdPartyPolicy::create([
            'personal_id' => $thirds->id,
            'motor_type' => request('motor_type'),
            'cubic_capacity' => request('cubic_capacity'),
            'pool' => request('pool'),
            'year' => request('year'),
            'pradesh_zone' => request('pradesh_zone'),
            'lot_no' => request('lot_no'),
            'vechile_type' => request('vechile_type'),
            'vechile_id' => request('vechile_id'),
            'brand' => request('brand'),
            'model' => request('model'),
            'chasis' => request('chasis'),
            'engine' => request('engine'),
            'images' => (empty($source)) ? null : json_encode($source),
            'policy_effective' => request('policy_effective'),
        ]);
        return redirect('/buy-renew/third-party');
    }

}
