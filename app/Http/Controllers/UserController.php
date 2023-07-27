<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro(): View
    {
        return view('cadastro');
    }

    public function homepage(): View
    {
        $project_name = 'Sistema de gestão para grupos de investimento';
        
        return view('welcome', compact('project_name'));
    }
}
