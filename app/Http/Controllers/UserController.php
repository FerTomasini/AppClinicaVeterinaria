<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user/index');
    }

    public function login(Request $form) {
        $email = $form->email;
        $senha = $form->senha;

        $user = User::select('id', 'nome', 'email')->where('email', $email)->where('senha', $senha)->get();
        
        // Encontrou alguém?
        if ($user->count()) {
            request()->session()->put('user', $user[0]);
            return redirect()->route('');
        } else {
            // Caso login tenha falhado

            return redirect()->route('user.index')->with('erro', 'Usuário ou senha inválidos');
        }
    }

    public function logout() {
        session()->forget('user');
        return redirect()->route('');
    }
}