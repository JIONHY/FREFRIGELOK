<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto_detalle extends Model
{
    protected $primaryKey = 'id_p';
   
   protected $fillable=['id_p','Producto','
id_prod_detalle','id_mat','cantidad','Unidad_medida'];
}
