<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;
use Illuminate\Http\Request;

class TipeKamarController extends Controller
{
    public function index()
    {
        $dataTipe = TipeKamar::all();

        // dd($dataTipe);
        return view("admin.kamar.tipeKamar.index", [
            'title' => 'Tipe Kamar',
            'dataTipe' => $dataTipe,
        ]);
    }

    public function cetak()
    {
        $dataTipe = TipeKamar::all();
        return view("admin.kamar.tipeKamar.cetak", [
            'title' => 'Cetak',
            'dataTipe' => $dataTipe,
        ]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        } else {
            $imagePath = null;
        }
        
        $tipe = TipeKamar::create([
            'tipe_kamar' => $request->input('tipe_kamar'),
            'harga' => $request->input('harga'),
            'image' => $imagePath,
        ]);
        // dd($tipe);s
        return redirect()->route('tipe_kamar.index');
    }

    public function template()
    {
        $template = storage_path('app/public/excelTemplate/TipeKamar.xlsx');

        $fileName = 'TipeKamar.xlsx';

        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return response()->download($template, $fileName, $headers);
    }

    public function delete($id)
    {
        $tipeKamar = TipeKamar::find($id);
        $tipeKamar->delete();

        return redirect()->route('tipe_kamar.index');
    }
}
