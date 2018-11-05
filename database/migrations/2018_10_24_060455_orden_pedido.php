<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenPedido extends Migration
{

    public function up()
    {
        Schema::create('orden_pedido', function (Blueprint $table) {
                    $table->increments('id_p');
					$table->integer('Unidad_medida');
					$table->increments('id_p_pedido');
					$table->string('fecha');
					$table->string('fecha_Entrega');
					$table->string('costo');
					$table->string('tipo');
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('orden_pedido');
    }
}