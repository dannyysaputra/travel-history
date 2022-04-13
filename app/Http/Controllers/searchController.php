<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnSelf;

class searchController extends Controller
{
    public function searchByCategory(Request $request)
    {
        if($search = $request->tanggal) {
            $data = Auth::user()->travels()->whereDate('travel.tanggal', $search)
                        ->orWhereYear('travel.tanggal', $search)->get();
        } elseif($search = $request->lokasi) {
            $data = Auth::user()->travels()->where('travel.lokasi', 'like', '%'.$search.'%')->get();
        } elseif($search = $request->suhu) {
            $data = Auth::user()->travels()->where('travel.suhu', 'like', '%'.$search.'%')->get();
        } else {
            $data = Auth::user()->travels;

            $mode = $request->query('mode');
            $field = $request->query('field');

            if($mode && $field) {
                $data = DB::table('travel')
                ->orderBy($field, $mode)
                ->get();
            }
        }
        return view('pages.dashboard', ['data'=>$data]);
    }
}