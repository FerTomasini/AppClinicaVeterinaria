<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        return view('usuarios/index');
    }

    public function login(Request $form) {
        $email = $form->email;
        $senha = $form->senha;

        $usuario = User::select('id', 'nome', 'email')->where('email', $email)->where('senha', $senha)->get();
        
        // Encontrou alguém?
        if ($usuario->count()) {
            request()->session()->put('usuario', $usuario[0]);
            return redirect()->route('entrada');
        } else {
            // Caso login tenha falhado

            return redirect()->route('usuario.index')->with('erro', 'Usuário ou senha inválidos');
        }
    }

    public function logout() {
        session()->forget('usuario');
        return redirect()->route('entrada');
    }
}