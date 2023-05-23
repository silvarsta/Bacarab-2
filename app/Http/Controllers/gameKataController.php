<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use App\Models\Printable;
use Illuminate\Http\Request;

class gameKataController extends Controller
{

    public function gameKata()
    {
        $kamus = Kamus::all();
        $printable = Printable::all();
        $kamusKata = Kamus::where('kelompok', 'kata')->get();
        $printableKata = Printable::where('kelompok', 'kata')->get();
        return view('gameKata', compact('kamus', 'printable', 'kamusKata', 'printableKata'));
    }
}
