<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class orden_prod_detalle extends Model
{
    protected $primaryKey = 'id_ped_detalle';
   
    protected $fillable=['id_ped_detalle','id_p','id_p_pedido','cantidad',
                          'unidad_medida','Forma_embolsado'];
}
