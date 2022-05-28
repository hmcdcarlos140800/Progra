<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesionesController extends Controller
{
    public function crear(){
        return view('auth.login');
    }
}
