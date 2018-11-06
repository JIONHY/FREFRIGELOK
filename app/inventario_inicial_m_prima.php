<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class inventario_inicial_m_prima extends Model

{
   protected $primaryKey = 'id_Mat_Prima';
   
   protected $fillable=['id_Mat_Prima','Existencia_Inicial','Unidad_Medida'];	
}
