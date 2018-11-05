<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroElabProductos extends Migration
{

    public function up()
    {
        Schema::create('registro_elab_productos', function (Blueprint $table) {
                    $table->increments('id_Mat_Prima');
					$table->string('Cantidad_salida');
					$table->integer('Unidad_medida');
					$table->string('Unidad_Existencia');
					$table->string('Fecha_Produccion');
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('registro_elab_productos');
    }
}