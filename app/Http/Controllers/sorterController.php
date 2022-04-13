<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sorterController extends Controller
{
    public function sort(Request $request) {
        $mode = $request->query('mode');
        $field = $request->query('field');
        return redirect('/search?mode='.$mode.'&field='.$field);
    }
}
