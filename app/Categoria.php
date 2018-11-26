<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Las variables protected table and primarykey no son necesarias en este caso
    protected $fillable = ['nombre', 'descripcion', 'condicion'];
    
}
