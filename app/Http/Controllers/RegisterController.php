<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.registerForm', [
            "title" => "Register"
        ]);
    }

    public function registerAction(Request $request)
    {
        $user = new User([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        
        if ($user->save()) {
            return redirect('/');
        }
        else{
            return redirect('/register');
        }
    }
}
