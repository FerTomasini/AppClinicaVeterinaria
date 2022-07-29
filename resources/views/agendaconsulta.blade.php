@extends('templates/layout')

@section('titulo', 'Agendamento de Consultas')

@section('corpo')
    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif
    @if(session('usuario'))
    <form action="{{ route('consultas.agendar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <form>

        <p><input value="{{ old('nomeanimal') }}" type="text" name="nomeanimal" placeholder="Nome do animal" value=""></p>
        <p><input value="{{ old('peso') }}" type="text" name="peso" placeholder="Peso" value=""></p>
        <p><input value="{{ old('idade') }}" type="text" name="idade" placeholder="Idade" value=""></p>
        <p><input value="{{ old('user_name') }}" type="text" name="user_name" placeholder="Nome Tutor" value=""></p>
        <p><input value="{{ old('dataconsulta') }}" type="date" name="dataconsulta" placeholder="Data"></p>
        <p><textarea name="descricao" cols="30" rows="10" placeholder="Motivo da consulta">{{ old('descricao') }}</textarea></p>

        <p><input type="submit" value="Gravar"></p>
    </form>
    @else 
    <h3>Para agendar consultas é necessário estar logado!</h3>
    @endif
@endsection