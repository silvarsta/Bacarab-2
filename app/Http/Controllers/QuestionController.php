<?php

namespace App\Http\Controllers;
use App\Models\Contact;


use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function question(){
        $question = Contact::all();
        return view('admin.question', compact('question'));
    }
}
