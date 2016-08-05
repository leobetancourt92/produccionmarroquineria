<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('empresa', function(Blueprint $table)
            {
                $table->integer('emp_id')->primary();
                $table->integer('emp_nit');
                $table->string('emp_razon_social',60);
                $table->integer('emp_telefono');
                $table->string('emp_direccion',60);
                $table->string('emp_correo')->unique();
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
		Schema::drop('empresa');
	}

}
