<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin.dashboard.index", [
            'title' => 'Dashboard'
        ]);
    }

    public function user()
    {
        $dataUser = User::all();
        // dd($dataUser);
        return view("admin.user.index", [
            'title' => 'User',
            'dataUser' => $dataUser,
        ]);
    }

    public function tipeKamar()
    {
        $dataTipe = TipeKamar::all();
        // dd($dataTipe);
        return view("admin.kamar.tipeKamar.index", [
            'title' => 'Tipe Kamar',
            'dataTipe' => $dataTipe,
        ]);
    }

    public function nomorKamar()
    {
        return view("admin.kamar.nomorKamar.index", [
            'title' => 'Nomor Kamar'
        ]);
    }
}
