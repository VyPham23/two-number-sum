<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongController extends Controller
{
    public function cong($a, $b) {
        return $a + $b;
    }

    public function tinhtong(Request $request) {
        $sum = $request->soa + $request->sob;
        return view('sum', compact ('sum'));
    }
}

