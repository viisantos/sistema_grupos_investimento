<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function openLogin(): View
    {
        $login_page_title = 'Login';

        return view('login', compact('login_page_title'));
    }

    public function doLogin(){
        
    }
}
