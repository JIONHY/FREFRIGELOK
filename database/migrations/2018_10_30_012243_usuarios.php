<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
  
    public function up()
    {
  Schema::create('usuarios', function (Blueprint $table) {
                    $table->increments('idu');
					$table->string('nombre',40);
					$table->string('correo',40);
					$table->string('tipo',20);
					$table->string('user',20);
					$table->string('pasw',20);
					$table->rememberToken();
				    $table->timestamps();
        });
    }

  
    public function down()
    {
  Schema::drop('usuarios');
    }
}
