<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    //
    protected $fillable = ['idanimal', 'especie', 'sexo', 'año', 'pais', 'continente'];
}
