<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro_elab_productos extends Model
{
    protected $primaryKey = 'id_Mat_Prima';
   
   protected $fillable=['id_Mat_Prima','Cantidad_salida','Unidad_medida','Fecha_Produccion'];
}
