<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaPrima extends Migration
{

    public function up()
    {
        Schema::create('materia_prima', function (Blueprint $table) {
                    $table->increments('id_Mat');
					$table->string('Mat_Prima');
					$table->integer('Tipo');
					$table->integer('Unidad_Medida');
					$table->string('Unidad_Existencia');
					$table->string('Inventario');
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('materia_prima');
    }
}
