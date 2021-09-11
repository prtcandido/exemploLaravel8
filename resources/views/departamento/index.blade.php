@extends('master')
@section('titulo','Departamentos')
@section('principal','nav-link')
@section('departamento','nav-link active')
@section('corpo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Departamentos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a href="/departamento/create" class="btn btn-sm btn-outline-primary">Novo</a>
		</div>
	</div>
</div>

<table class="table table-striped">
<tr>
	<th>Nome</th>
	<th>Sigla</th>
	<th>Centro de Custo</th>
	<th>Opções</th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($nomeVarView as $d)
<tr>
	<td>{{ $d->nome }}</td>
	<td>{{ $d->sigla }}</td>
	<td>{{ $d->centroCusto }}</td>
	<td>
		<a href="/departamento/{{$d->id}}" class="btn btn-danger btn-sm"><span data-feather="x-octagon"></span> Excluir</a>
		<a href="/departamento/{{$d->id}}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Editar</a>
	</td>
</tr> 
@endforeach
</table>
<!-- Botões de paginação -->
<nav aria-label="Navegação de página exemplo">
	{{ $nomeVarView->links() }}
</nav>
@endsection