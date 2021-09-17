<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nome','endereco','datanascimento','departamento_id'];

    public function departamento(){
    	return $this->belongsTo('App\Models\Departamento','departamento_id','id');
    }

    public function tarefas() {
    	return $this->belongsToMany('App\Models\Tarefa');
    }

    /*
		Exemplo de uso do método tarefas:

		$f = Funcionario::find(503);
		$colecaoTarefas = $f->tarefas()->get();

    */

}
