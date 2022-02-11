<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registController extends Controller
{
    public function regist()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function user()
    {
        $data = user::all();
        return view('pages.user', ['data' => $data]);
    }

    public function registUser(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'email' => 'email@',
            'password' => $request->password
        ];

        User::create($data);
        return redirect('/')->with('message', 'Penyimpanan Berhasil');
    }
}