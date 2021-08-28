@extends('master')
@section('titulo','Departamentos')
@section('corpo')
        <h3>Departamentos</h3>
        <div>
        <a href="/departamento/create">Novo Departamento</a>
        </div>
        @foreach($nomeVarView as $d)
            {{ $d->nome }} - {{ $d->sigla }} <br/>
        @endforeach
@endsection