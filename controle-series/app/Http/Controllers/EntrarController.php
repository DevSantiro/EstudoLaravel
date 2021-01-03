<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrarController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return view('entrar/index');
        }
        // $_SESSION['usuario'] = Auth::user()->name;
        return redirect()->route('listar_series');
    }

    public function entrar(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password']))){
            return redirect()->back()->withErrors('Usuário e/ou senhas incorretos');
        }

        return redirect()->route('listar_series');

    }
}
