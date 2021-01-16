<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoologico extends Model
{
    //
    protected $fillable = ['nombre', 'ciudad', 'pais', 'area', 'presupuesto'];
}
