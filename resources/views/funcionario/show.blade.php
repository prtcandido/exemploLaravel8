@extends('master')
@section('titulo','Funcionário')
@section('corpo')
	<div class="container">
		<h3>Funcionário</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Nome</dt>
					<dd>{{$funcionario->nome}}</dd>
					<dt>Endereço</dt>
					<dd>{{$funcionario->endereco}}</dd>
					<dt>Data Nascimento</dt>
					<dd>{{$funcionario->datanascimento}}</dd>
					<dt>Departamento</dt>
					<dd>{{$funcionario->belongsTo('App\Models\Departamento','departamento_id','id')->first()->nome}}</dd>
				</dl>
				<form action="/funcionario/{{$funcionario->id}}" method="post">
					@csrf
					@method('DELETE')
					<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
					<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection