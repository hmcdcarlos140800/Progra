<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoesController extends Controller
{
    public function shoes(){
        return view('shoes');
    }
}
