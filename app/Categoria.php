<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table="categoria";

    protected $primaryKey= "idcategoria";

    public $timestamps=false;

    protected $fillelable=[
        'nombre',
        'descripcion',
        'condicion'
    ];

    
}
