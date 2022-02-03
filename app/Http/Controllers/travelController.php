<?php

namespace App\Http\Controllers;

use App\Models\travel;
use Illuminate\Http\Request;

class travelController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function inputDataTravel()
    {
        return view('pages.input-data');
    }

    public function simpanTravel(Request $request)
    {
        $data = [
            'id_user' => $request->id_user,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu
        ];

        // dd($data);

        travel::create($data);
    }
}