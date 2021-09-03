@extends('master')
@section('titulo','Departamentos')
@section('corpo')
<h3>Departamentos</h3>
<a href="/departamento/create" class="btn btn-primary btn-sm">Novo</a>
<table class="table table-striped">
<tr>
	<th>Nome</th>
	<th>Sigla</th>
	<th></th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($nomeVarView as $d)
<tr>
	<td>{{ $d->nome }}</td>
	<td>{{ $d->sigla }}</td>
	<td>
		<a href="/departamento/{{$d->id}}" class="btn btn-primary btn-sm">Detalhe</a>
		<a href="/departamento/{{$d->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>
<!-- Botões de paginação -->
{{ $nomeVarView->links() }}

@endsection