<?php

namespace App\Http\Controllers;

use App\Models\travel;
use Illuminate\Http\Request;

class travelController extends Controller
{
    public function index()
    {
        $data = travel::all();
        return view('pages.dashboard', ['data' => $data]);
    }

    public function inputDataTravel()
    {
        return view('pages.input-data');
    }


    public function simpanTravel(Request $request)
    {
        $data = [
            'id_user' => 1,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'suhu' => $request->suhu
        ];

        // dd($data);

        travel::create($data);
        return redirect('/')->with('message', 'Penyimpanan Berhasil');
    }
}
