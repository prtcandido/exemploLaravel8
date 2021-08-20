<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    use HasFactory;

    protected $fillable = ['nome','parentesco_id','funcionario_id'];

    public $timestamps = false;
}
