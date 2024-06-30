<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function register()
    {


        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),

        ];



        User::create($data);
        return redirect('/login');
    }

    public function login()
    {


        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        ]);

        $cridential = $request->only('username', 'password');

        if (!$cridential) {
            return redirect('/login');
        }
        return redirect('/dashboard');
    }
}
