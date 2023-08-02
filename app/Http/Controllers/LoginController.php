<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function openLogin(): View
    {
        $login_page_title = 'Login';

        return view('login', compact('login_page_title'));
    }

    public function doLogin(Request $request){

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($credentials); 
    }

    public function logout(Request $request){

        Auth::logout(); 
        return redirect()->route('login.doLogin');
    }


   
}
