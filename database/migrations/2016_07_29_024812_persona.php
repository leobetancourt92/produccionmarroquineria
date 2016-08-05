<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('persona', function(Blueprint $table)
            {
                    $table->increments('per_id');
                    $table->integer('per_telefono');
                    $table->string('per_direccion',60);
                    $table->string('per_correo')->unique();
                    $table->timestamp('per_fecha_nacimiento');
                    $table->integer('tip_cli_id');
                    $table->foreign('tip_cli_id')
                               ->references('tip_cli_id') 
                              ->on('tipo_cliente')
                               ->onDelete('cascade');
                    $table->softDeletes();
                    $table->timestamps();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('persona');
	}

}
