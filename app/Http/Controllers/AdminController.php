<?php

namespace App\Http\Controllers;
use App\Models\Kamus;
use App\Models\Printable;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {

        $kamus = Kamus::all();
        $kamusCount = Kamus::count();
        $printable = Printable::all();
        $printableCount = Printable::count();
        // $user = User::all();
        $user = User::where('role', 'user')->get();
        $userCount = User::count();
        return view('admin.dashboard', compact('kamus','kamusCount', 'printable', 'printableCount', 'user', 'userCount'));
    }

}