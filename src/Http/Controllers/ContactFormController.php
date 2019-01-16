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
            'email'=>'required|email|max:50|unique:contact_forms,email'
        ]);

        //Data
        $contact_form = new ContactForm();
        $contact_form->first_name = $request->first_name;
        $contact_form->middle_name = $request->middle_name;
        $contact_form->last_name = $request->last_name;
        $contact_form->full_name = $request->full_name;
        $contact_form->mobile = $request->mobile;
        $contact_form->tel = $request->tel;
        $contact_form->email = $request->email;
        $contact_form->url = $request->url;
        $contact_form->nid = $request->nid;
        $contact_form->country = $request->country;
        $contact_form->driving_license = $request->driving_license;
        $contact_form->passport = $request->passport;
        $contact_form->designation = $request->designation;
        $contact_form->present_address = $request->present_address;
        $contact_form->permanent_address = $request->permanent_address;
        $contact_form->subject = $request->subject;
        $contact_form->description = $request->description;
        $contact_form->start_date = $request->start_date;
        $contact_form->end_date = $request->end_date;
        $contact_form->drop_down = $request->drop_down;
        $contact_form->check_box = $request->check_box;
        $contact_form->radio = $request->radio;
        $contact_form->attachment = $request->attachment;

        //Save
        $res = $contact_form->save();

        //Set session data
        if($res)
            $request->session()->flash('success','<strong>Success!</strong> Record inserted successfully');
        else
            $request->session()->flash('danger','<strong>Failure!</strong> Record not inserted successfully');

        //Return back
        return back();
    }
}
