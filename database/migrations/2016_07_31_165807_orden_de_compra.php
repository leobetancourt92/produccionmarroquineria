<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenDeCompra extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('orden_de_compra', function(Blueprint $table)
            {
                    $table->integer('ord_com_id')->primary();
                    $table->timestamp('ord_com_fecha');
                    $table->string('ord_com_total');
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
            Schema::drop('orden_de_compra');
	}

}
