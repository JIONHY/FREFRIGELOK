<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoDetalle extends Migration
{
   
    public function up()
    {
         Schema::create('producto_detalle', function (Blueprint $table) {
                    $table->increments('id_p');
					$table->string('Producto');
                    $table->string('id_prod_detalle');
                    $table->string('id_mat');
                    $table->string('cantidad');
                    $table->integer('Unidad_medida');
                    $table->integer('id_p')->unsigned();
                    $table->foreign('id_p')->references('id_p')->on('orden_prod_detalle');

					$table->rememberToken();
				    $table->timestamps();
        }); 
    }

    public function down()
    {
        Schema::drop('producto_detalle');
    }
}