<?php

namespace W3public\ContactForm\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use W3public\ContactForm\Models\ContactForm;
class ContactFormController extends Controller
{
    public function index()
    {
       return view('contact_form::index');
    }

    public function store(Request $request)
    {
        //validation
        $request->validate([
            'email'=>'required|max:50|unique:contact_forms,email'
        ]);

        //Data
        $contact_form = new ContactForm();
        $contact_form->first_name = $request->first_name;
        $contact_form->middle_name = $request->middle_name;
        $contact_form->last_name = $request->last_name;
        $contact_form->full_name = $request->full_name;
        $contact_form->mobile = $request->mobile;
        $contact_form->email = $request->email;
        $contact_form->nid = $request->nid;
        $contact_form->driving_license = $request->driving_license;
        $contact_form->passport = $request->passport;
        $contact_form->designation = $request->designation;
        $contact_form->country = $request->country;

        //Save
        $contact_form->save();

        //Return back
        return back()->with('success','<strong>Success!</strong> Record inserted successfully');
    }
}
