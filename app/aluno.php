<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    protected $fillable = ['nome','matricula','curso'];
}
