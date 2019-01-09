<?php

namespace W3public\Calculator\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    public function index()
    {
       return view('calculator::calculator');
    }

    public function add($a, $b)
    {
        $result = $a + $b;
        return view('calculator::index', compact('result'));
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view('calculator::index', compact('result'));
    }

    //contact form
    public function contact_form()
    {
        return view('calculator::contact_form');
    }
    public function contact_form_store(Request $request)
    {
        return $request->all();
    }
}
