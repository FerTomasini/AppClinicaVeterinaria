<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\User;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function gravarmensagem(Request $form) {
        $dados = $form->validate([
        'nome' => 'required|max:255',
        'sobrenome' => 'required',
        'email' => 'required',
        'assunto' => 'required',
        'mensagem' => 'required'
        ]);

        Contato::create($dados);

        return redirect()->route('entrada')->with('msg', "Em breve nossa equipe entrará em contato com você!");;
    }
}
