<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table="articulo";
    public $timestamps=false;
    protected $fillelable=[
        'idcategoria',
        'codigo',
        'nombre',
        'descripcion',
        'stock',
        'imagen',
        'estado'
    ];
}
