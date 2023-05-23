<?php

namespace App\Http\Controllers;
use App\Models\Kamus;
use App\Models\Printable;

use Illuminate\Http\Request;

class gameAngkaController extends Controller
{
    public function gameAngka()
    {
        $kamus = Kamus::all();
        $printable = Printable::all();
        $kamusAngka = Kamus::where('kelompok', 'angka')->get();
        $printableAngka = Printable::where('kelompok', 'angka')->get();
        return view('gameAngka', compact('kamus', 'printable', 'kamusAngka', 'printableAngka'));
    }
}
