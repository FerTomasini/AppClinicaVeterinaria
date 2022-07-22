@extends('templates/layout')

@section('titulo', 'Agendamento de Consultas')

@section('corpo')
<h1>Agendar Consulta Veterinária</h1>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('consultas') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <p><input value="{{ old('nomeanimal') }}" type="text" name="nomeanimal" placeholder="Nome do animal" value=""></p>
        <p><input value="{{ old('peso') }}" type="text" name="peso" placeholder="Peso" value=""></p>
        <p><input value="{{ old('idade') }}" type="text" name="idade" placeholder="Idade" value=""></p>
        <p>
            <select name="user_id">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->nome}}</option>
            @endforeach
            </select>
        </p>
        <p><input value="{{ old('dataconsulta') }}" type="number" name="data" placeholder="Data"></p>
        <p><textarea name="descricao" cols="30" rows="10" placeholder="Motivo da consulta">{{ old('descricao') }}</textarea></p>

        <p><input type="submit" value="Gravar"></p>

    </form>
@endsection