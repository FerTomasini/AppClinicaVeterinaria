<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;

class ConsultController extends Controller
{

    public function agendar(Request $form){
        $dados = $form->validate([
            'nomeanimal' => 'required|max:255',
            'peso' => 'required',
            'idade' => 'required',
            'user_name' => 'required',
            'dataconsulta' => 'required',
            'descricao' => 'required'
        ]);

        Consult::create($dados);

        return redirect()->route('entrada')->with('msg', "Consulta criada com sucesso");
    }
}