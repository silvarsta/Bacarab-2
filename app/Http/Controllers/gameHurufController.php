<?php

namespace App\Http\Controllers;
use App\Models\Kamus;
use App\Models\Printable;

use Illuminate\Http\Request;

class gameHurufController extends Controller
{

    public function gameHuruf()
    {
        $kamus = Kamus::all();
        $printable = Printable::all();
        $kamusHuruf = Kamus::where('kelompok', 'huruf')->get();
        $printableHuruf = Printable::where('kelompok', 'huruf')->get();
        return view('gameHuruf', compact('kamus', 'printable', 'kamusHuruf', 'printableHuruf'));
    }
}
