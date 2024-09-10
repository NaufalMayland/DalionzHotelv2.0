<?php

namespace App\Http\Controllers;

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
        return view("admin.user.index", [
            'title' => 'User'
        ]);
    }
}
