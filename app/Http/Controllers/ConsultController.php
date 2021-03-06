<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Animal;
use App\Models\Consult;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function agendargravar(Request $form, User $user) {
        $dados = $form->validate([
        'nomeanimal' => 'required|max:255',
        'peso' => 'required',
        'idade' => 'required',
        'user_id' => 'required',
        'dataconsulta' => 'required',
        'descricao' => 'required'
        ]);

        $user->fill($dados);
        $user->save();
        return redirect()->route('consultas');
    }

    public function agendar(Request $form){
        $dados = $form->validate([
            'nomeanimal' => 'required|max:255',
            'peso' => 'required',
            'idade' => 'required',
            'user_id' => 'required',
            'dataconsulta' => 'required',
            'descricao' => 'required'
        ]);

        User::create($dados);

        return redirect()->route('consultas');
    }
}