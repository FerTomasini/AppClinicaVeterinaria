@extends('templates/layout')

@section('titulo', 'Login')

@section('corpo')
    <h1>Login</h1>
    <h5>Caro cliente, para acessar e aproveitar de todas as 
        comodidades de nosso site, por favor faça o seu login!</h5>

    @if(session('erro'))
        <p>{{ session('erro') }}</p>
    @endif

    <form action="{{ route('user.login') }}" method="post">
        @csrf
        <input type="text" name="email">
        <br>
        <input type="password" name="senha">
        <br>
        <input type="submit" value="Acessar">
    </form>
@endsection