<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function ver(Medicamento $med) {
        return view('farmacia', [
            'medicamento' => $med,
        ]);
    }
}
