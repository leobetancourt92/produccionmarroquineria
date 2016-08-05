<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('producto', function(Blueprint $table)
            {
                    $table->integer('pro_id')->primary();
                    $table->string('pro_descripcion');
                    $table->integer('pro_costo');
                    $table->string('pro_cantidad');
                    $table->integer('tal_id');
                    $table->foreign('tal_id')
                               ->references('tal_id') 
                              ->on('talla')
                               ->onDelete('cascade');
                    $table->integer('col_id');
                    $table->foreign('col_id')
                               ->references('col_id') 
                              ->on('color')
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
            Schema::drop('producto');
	}

}
