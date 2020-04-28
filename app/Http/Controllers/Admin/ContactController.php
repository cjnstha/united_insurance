<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function generalContact()
    {
        $contacts = Contact::first();
        if (empty($contacts)) {
            return view('admin.settings.contact');
        }
        return view('admin.settings.contactedit', compact('contacts'));
    }

    public function index(){
        return view('admin.settings.contact');

    }

    public function store(Request $request)
    {
        $contacts = Contact::first();
        $exists = 'true';
        DB::transaction(function () use ($exists, $request, $contacts) {
            if ($exists == 'false') {
                Contact::create([
                    'email' => $request->email,
                    'contact' => $request->contact,
                    'fax' => $request->fax,
                    'building_name' => $request->building_name,
                    'address' => $request->address,
                    'office_hour' => $request->office_hour,
                ]);
            } else {
                $contacts->update([
                    'email' => $request->email,
                    'contact' => $request->contact,
                    'fax' => $request->fax,
                    'building_name' => $request->building_name,
                    'address' => $request->address,
                    'office_hour' => $request->office_hour,
                ]);
            }
        });

        return redirect()->back()->with('flash_messsage_success', 'Contact Updated');
    }
}
