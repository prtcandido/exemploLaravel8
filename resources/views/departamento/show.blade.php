@extends('master')
@section('titulo','Departamentos')
@section('corpo')
<h3>Departamento</h3>

<dl>
	<dt>Nome</dt>
	<dd>{{$dep->nome}}</dd>

	<dt>Sigla</dt>
	<dd>{{$dep->sigla}}</dd>

	<dt>Centro Custo</dt>
	<dd>{{$dep->centroCusto}}</dd>

	<form action="/departamento/{{$dep->id}}" method="post">
		@csrf
		@method('DELETE')
		<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
		<a href="/departamento" class="btn btn-primary btn-sm">Voltar</a>
	</form>
</dl>

@endsection