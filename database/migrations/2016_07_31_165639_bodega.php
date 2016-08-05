<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bodega extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('bodega', function(Blueprint $table)
            {
                    $table->integer('bod_id')->primary();
                    $table->string('bod_total');
                    $table->integer('pro_id');
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
            Schema::drop('bodega');
	}

}
