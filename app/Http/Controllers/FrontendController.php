<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class FrontendController extends Controller
{
    public function userlist()
    {
        $data["contacts"] = Contact::all();
		return response()->json(compact('data'), 200);
       // return view('contacts.index', compact('contacts'));
    }
    
    public function deleteuserlist($id)
    {
        $data["delete"] = Contact::where('id',$id)->delete();
         //$data["contacts"] = Contact::all();
		return response()->json(compact('data'), 200);
       // return view('contacts.index', compact('contacts'));
    }
}
