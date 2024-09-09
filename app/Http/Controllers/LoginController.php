<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function  index()
    {
        return view("auth.loginForm", [
            "title" => "Login"
        ]);
    }

    public function loginAction(Request $request)
    {
        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $cek['email'])->first(['password', 'role']);

        if (is_null($user)) {
            return redirect()->back()->withErrors('Pengguna tidak ditemukan')->withInput();
        }
        if (!Hash::check($cek['password'], $user->password)) {
            return redirect()->back()->withErrors('Password tidak sesuai')->withInput();
        }

        if (Auth::attempt($cek)) {
            $request->session()->regenerate();

            if ($user->role == '1') {
                return redirect('/admin/dashboard/');
            } elseif ($user->role == '0') {
                return redirect('/home');
            }else {
                return redirect()->back()->withErrors('Akun tidak ada!')->withInput();
            }
        }
    }
}
