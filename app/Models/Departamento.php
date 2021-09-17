<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nome','sigla','centroCusto'];

    public function funcionarios() {
    	return $this->hasMany('App\Models\Funcionario');
    }
}
