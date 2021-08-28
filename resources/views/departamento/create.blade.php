@extends('master')
@section('titulo','Criar')
@section('corpo')
    <h3>Departamentos</h3>
    @foreach($errors->all() as $e)
        {{ $e }}<br/>
    @endforeach
    <form action="/departamento" method="post">
        @csrf
        Nome: <input type="text" name="nome" /><br/>
        Sigla: <input type="text" name="sigla"><br/>
        <input type="submit" value="Criar">
    </form>
@endsection