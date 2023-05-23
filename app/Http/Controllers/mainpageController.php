<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class mainpageController extends Controller
{
    public function main(){
        return view('mainpage');
    }

    public function createContact(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Contact::create($validateData);

        return view('mainpage');
    }

    public function profile(){
        return view('profile');
    }
}

