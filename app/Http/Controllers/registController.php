<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registController extends Controller
{
    public function regist()
    {
        return view('auth.register');
    }

    public function registUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:users',
            'nama' => 'required|min:5|max:255',
        ],
        [
            'email.unique' => 'NIK sudah terdaftar',
            'nama.required' => 'Nama tidak boleh kosong'
        ]);

        $validatedData = [
            "nama" => $validated['nama'],
            "email" => $validated['email'],
            "password" => bcrypt($validated['email'])
        ];

        // dd($validatedData);
        User::create($validatedData);
        return redirect('/')->with('success', 'Registrasi berhasil. Silahkan login!');
    }
}