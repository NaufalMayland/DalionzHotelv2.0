<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;
use Illuminate\Http\Request;

class TipeKamarController extends Controller
{
    public function index()
    {
        $dataTipe = TipeKamar::all();
        return view("admin.kamar.tipeKamar.index", [
            'title' => 'Tipe Kamar',
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
        return redirect('/admin/kamar/tipe_kamar/');
    }
}
