<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class productos extends Model
{
    protected $primaryKey = 'id_p';
   
    protected $fillable=['id_p','id_Mat','Mat_Prima','Tipo',
                          'Unidad_Medida','Inventario_Inicial','Cantidad','Producto'];
}
