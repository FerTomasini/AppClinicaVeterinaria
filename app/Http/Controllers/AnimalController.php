<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();

        return view('entrada', ['animals' => $animals]);
    }

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $animal = new Animal;

        $animal->nome = $request->nome;
        $animal->raca = $request->raca;
        $animal->idade = $request->idade;

        $user = auth()->user();
        $animal->user_id = $user->id;

        $animal->save();

        return redirect('entrada');
    }

    public function edit($id)
    {
        $user = auth()->user();

        $animal = Animal::findOrFail($id);

        if ($user->id != $animal->user->id) {
            return redirect('entrada');
        }

        return view('animals.edit', compact('animal'));
    }

    public function update(Request $request)
    {
        $data = $request->all();

        Animal::findOrFail($request->id)->update($data);

        return redirect('entrada');
    }

    public function destroy($id)
    {
        Animal::findOrFail($id)->delete();

        return redirect('entrada');
    }
}