<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoCliente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_cliente', function(Blueprint $table)
		{
			$table->integer('tip_cli_id');
			$table->primary('tip_cli_id');
			$table->integer('tip_identificacion')->unique();
			$table->string('tip_nombres',60);
			$table->string('tip_apellidos', 60);
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
		Schema::drop('tipo_cliente');
	}

}
