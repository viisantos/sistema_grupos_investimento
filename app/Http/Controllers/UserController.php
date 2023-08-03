<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function cadastro(): View
    {
        return view('cadastro');
    }

    public function homepage()
    {
        $project_name = 'Sistema de gestão para grupos de investimento';

        if(Auth::check() === true){
            return view('welcome', compact('project_name'));
        }
        return redirect()->route('login.openlogin');
    }
}
