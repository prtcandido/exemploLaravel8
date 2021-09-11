@extends('master')
@section('titulo','Departamentos')
@section('principal','nav-link')
@section('departamento','nav-link active')
@section('corpo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Deletar Departamento</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
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
		</div>
    </div>
</div>
@endsection