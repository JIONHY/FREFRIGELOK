<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
                    $table->increments('id_p');
					$table->string('id_Mat');
					$table->string('Mat_Prima');
					$table->string('Tipo');
					$table->integer('Unidad_Medida');
					$table->string('Inventario_Inicial');
					$table->string('Cantidad');
					$table->integer('Producto');
					$table->integer('id_Mat')->unsigned();
		           $table->foreign('id_Mat')->references('id_Mat')->on('materia_prima');
			
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('productos');
    }
}