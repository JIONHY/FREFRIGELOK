<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class materia_prima extends Model
{
    
    protected $primaryKey = 'id_Mat';
   
    protected $fillable=['id_Mat','Tipo','Unidad_Medida','','Unidad_Existencia','Cantidad','Inventario',];
}
