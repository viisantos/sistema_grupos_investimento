<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;

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

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
          ], [
            'email.required'    => 'Campo email é obrigatório',
            'email.email'       => 'Insira um email válido',
            'password.required' => 'Campo senha é obrigatório'
          ]);

          $user = UserModel::where('email', $request->input('email'))->first();

          if (!$user) {
            return redirect()->route('login.openLogin')->withErrors(['error' => 'email ou senha inválidos']);
          }

          if (!password_verify($request->input('password'), $user->password)) {
            return redirect()->route('login.openLogin')->withErrors(['error' => 'Email ou senha inválidos']);
          }

          Auth::loginUsingId($user->id);

          return redirect()->route('home.homepage')->with('success', 'Logged in');

        //if(Auth::attempt($credentials)){

            //return redirect()->intended(route('home.homepage'));
        //}
    }

    public function logout(Request $request){

        Auth::logout();
        //return redirect()->route('login.doLogin');
    }



}
