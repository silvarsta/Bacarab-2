<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function dictionary()
    {
        $kamus = Kamus::all();
        $kamusCount = Kamus::count();
        return view('admin.dictionary', ['kamus' => $kamus], compact('kamusCount'));
    }

    public function createKamus()
    {
        return view('admin.createKms');
    }

    public function storeKamus(Request $request)
    {
        $validateData = $request->validate([
            'gambar' => 'required|file|image|max:2000',
            'indonesia' => 'required',
            'arab' => 'required',
            'pelafalan' => 'required',
            'kelompok' => 'required',
        ]);
        $kamus = Kamus::create($validateData);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move(public_path('assets/img/kamus'), $request->file('gambar')->getClientOriginalName());
            $kamus->gambar = $request->file('gambar')->getClientOriginalName();
            $kamus->save();
        }

        return redirect()->route('admin.dictionary')->with('pesan', "Penambahan data {$validateData['indonesia']} berhasil");
    }

    public function editKamus(Kamus $kamus)
    {
        return view('admin.editKms', ['kamus' => $kamus]);
    }

    public function updateKamus(Request $request, Kamus $kamus)
    {
        $validateData = $request->validate([
            'gambar' => 'nullable|file|image|max:2000',
            'indonesia' => 'required',
            'arab' => 'required',
            'pelafalan' => 'required',
            'kelompok' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus file gambar yang lama
            Storage::delete($kamus->gambar);

            // Simpan file gambar yang baru
            $newImagePath = $request->file('gambar')->store('assets/img/kamus');
            $validateData['gambar'] = $newImagePath;
        } else {
            // Jika tidak ada file gambar baru, gunakan file gambar yang lama
            $validateData['gambar'] = $kamus->gambar;
        }

        $kamus->update($validateData);

        return redirect()->route('admin.dictionary', ['kamus' => $kamus->id])
            ->with('pesan', "Update data {$validateData['indonesia']} berhasil");
    }


    public function destroyKamus(Kamus $kamus)
    {
        // Hapus gambar dari storage
        Storage::delete('public/assets/img/kamus/' . $kamus->gambar);

        // Hapus data Kamus dari database
        $kamus->delete();

        return redirect()->route('admin.dictionary')
            ->with('pesan', "Hapus data $kamus->indonesia berhasil");
    }
}
