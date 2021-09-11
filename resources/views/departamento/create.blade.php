@extends('master')
@section('titulo','Departamentos')
@section('principal','nav-link')
@section('departamento','nav-link active')
@section('corpo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Novo Departamento</h2>
</div>
<div class="row">
    <div class="col-sm-6">
        <form action="/departamento" method="post">
            @csrf  <!-- token de segurança -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
                @if($errors->has('nome'))
                <p class="text-danger">{{$errors->first('nome')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="sigla">Sigla</label>
                <input type="text" name="sigla" id="sigla" class="form-control" value="{{old('sigla')}}"/>
                @if($errors->has('sigla'))
                <p class="text-danger">{{$errors->first('sigla')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="centroCusto">Centro Custo</label>
                <input type="text" name="centroCusto" id="centroCusto" class="form-control" value="{{old('centroCusto')}}"/>
                @if($errors->has('centroCusto'))
                <p class="text-danger">{{$errors->first('centroCusto')}}</p>
                @endif
            </div>
            <input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
            <a href="/departamento" class="btn btn-primary btn-sm">Voltar</a>
        </form>
    </div>
</div>
@endsection