<?php

namespace App\Http\Controllers;

use App\Models\travel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class travelController extends Controller
{
    public function index()
    {
        $data = DB::table('travel')->paginate(6);
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
        return redirect('/dashboard')->with('message', 'Penyimpanan Berhasil');
    }
}
