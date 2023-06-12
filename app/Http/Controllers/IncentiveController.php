<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncentiveController extends Controller
{
    //
    public function indexInc()
    {
        return view('manageIncentive.create');
    }
}
