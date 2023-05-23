<?php

namespace App\Http\Controllers;

use App\Models\Printable;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PrintableController extends Controller
{
    public function printable()
    {
        $printable = Printable::all();
        $printableCount = Printable::count();

        return view('admin.printable', ['printable' => $printable], compact('printableCount'));
    }

    public function createPrintable()
    {
        return view('admin.createPrint');
    }

    public function storePrintable(Request $request)
    {
        $validateData = $request->validate([
            'gambar' => 'required|file|image|max:2000',
            'src_gambar' => 'required',
            'kelompok' => 'required',
        ]);
        $printable = Printable::create($validateData);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move(public_path('assets/img/printable'), $request->file('gambar')->getClientOriginalName());
            $printable->gambar = $request->file('gambar')->getClientOriginalName();
            $printable->save();
        }

        return redirect()->route('admin.printable')->with('pesan', "Penambahan data {$validateData['src_gambar']} berhasil");
    }

    public function editPrintable(Printable $printable)
    {
        return view('admin.editPrint', ['printable' => $printable]);
    }

    public function updatePrintable(Request $request, Printable $printable)
    {
        $validateData = $request->validate([
            'gambar' => 'nullable|file|image|max:2000',
            'src_gambar' => 'required',
            'kelompok' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus file gambar yang lama
            Storage::delete($printable->gambar);

            // Simpan file gambar yang baru
            $newImagePath = $request->file('gambar')->store('assets/img/printable');
            $validateData['gambar'] = $newImagePath;
        } else {
            // Jika tidak ada file gambar baru, gunakan file gambar yang lama
            $validateData['gambar'] = $printable->gambar;
        }

        $printable->update($validateData);

        return redirect()->route('admin.printable', ['printable' => $printable->id])
            ->with('pesan', "Update data {$validateData['src_gambar']} berhasil");
    }


    public function destroyPrintable(Printable $printable)
    {
        // Hapus gambar dari storage
        Storage::delete('public/assets/img/printable/' . $printable->gambar);

        // Hapus data printable dari database
        $printable->delete();

        return redirect()->route('admin.printable')
            ->with('pesan', "Hapus data $printable->src_gambar berhasil");
    }
}
