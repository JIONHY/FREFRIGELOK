<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventarioInicialMPrima extends Migration
{

    public function up()
    {
        Schema::create('inventario_inicial_m_prima', function (Blueprint $table) {
                    $table->increments('id_Mat_Prima');
					$table->string('Existencia_Inicial');
					$table->integer('Unidad_Medida');
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('inventario_inicial_m_prima');
    }
}





