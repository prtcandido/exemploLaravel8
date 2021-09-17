@extends('master')
@section('titulo','Editar Funcionário')
@section('corpo')
	<div class="container">
		<h3>Editar Funcionário</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/funcionario/{{$funcionario->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{empty(old('nome')) ? $funcionario->nome : old('nome')}}"/>
						@if($errors->has('nome'))
						<p class="text-danger">{{$errors->first('nome')}}</p>
						@endif	
					</div>
					<div>
						<label for="endereco">Endereco</label>
						<input type="text" name="endereco" id="endereco" class="form-control" value="{{empty(old('endereco')) ? $funcionario->endereco : old('endereco')}}"/>
						@if($errors->has('endereco'))
						<p class="text-danger">{{$errors->first('endereco')}}</p>
						@endif
					</div>
					<div>
						<label for="datanascimento">Data Nascimento</label>
						<input type="date" name="datanascimento" id="datanascimento" class="form-control" value="{{(empty(old('datanascimento')))?$funcionario->datanascimento:old('datanascimento')}}"/>
						@if($errors->has('datanascimento'))
						<p class="text-danger">{{$errors->first('datanascimento')}}</p>
						@endif
					</div>
					<div>
						<label for="departamento_id">Departamento</label>
						<select name="departamento_id" id="departamento_id" class="form-control">
							@foreach($cDepartamentos as $d)
								<option value="{{$d->id}}" {{$funcionario->departamento_id==$d->id ? 'selected' : ''}}>{{$d->nome}}</option>
							@endforeach
						</select>
					</div>
		    		<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection