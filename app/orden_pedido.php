<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class orden_pedido extends Model
{
    protected $primaryKey = 'id_p';
   
    protected $fillable=['id_p','id_p_pedido','fecha','fecha_Entrega',
                          'costo','tipo'];
}
