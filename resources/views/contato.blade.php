@extends('templates/layout')

@section('titulo', 'Farmácia Veterinária')

@section('corpo')
<form action="{{ route('gravarmensagem') }}" method="post" enctype="multipart/form-data">
@csrf
<form>

        <p><input value="{{ old('nome') }}" type="text" name="nome" placeholder="Nome" value=""></p>
        <p><input value="{{ old('sobrenome') }}" type="text" name="sobrenome" placeholder="Sobrenome" value=""></p>
        <p><input value="{{ old('email') }}" type="text" name="email" placeholder="Email" value=""></p>
        <p><input value="{{ old('assunto') }}" type="text" name="assunto" placeholder="Assunto" value=""></p>
        <p><textarea name="mensagem" cols="30" rows="10" placeholder="Mensagem">{{ old('mensagem') }}</textarea></p>

        <p><input type="submit" value="Gravar"></p>
    </form>
@endsection