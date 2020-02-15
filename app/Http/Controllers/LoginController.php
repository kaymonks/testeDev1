<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        return view('login.index');
    }

    public function entrar(LoginRequest  $request)
    {
        $dados = $request->all();

        if (Auth::attempt(['login'=>$dados['login'], 'password'=>$dados['senha']])){ //admim
            return redirect()->intended('/turmas');
        }else{
            return redirect()->intended('/login')->with("validaLogin", "Campo login e/ou senha inválido");
        }
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
