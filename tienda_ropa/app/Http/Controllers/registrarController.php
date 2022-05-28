<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRuquest;
use App\Models\User;

class registrarController extends Controller
{
    public function crear(){
        return view('auth.registrar');
    }
    public function register(RegisterRuquest $request){
        $user = User::create($request->validated());


    }


}
