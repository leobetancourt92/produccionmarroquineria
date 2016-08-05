<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleOrdenCompra extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('detalle_orden_compra', function(Blueprint $table)
            {
                    $table->integer('pro_id');
                    $table->integer('det_com_id');
                    $table->primary(['pro_id','det_com_id']);
                    $table->integer('det_com_cantidad');
                    $table->string('det_com_etapa');
                    $table->foreign('pro_id')
                               ->references('pro_id') 
                              ->on('producto')
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
            Schema::drop('detalle_orden_compra');
	}

}
