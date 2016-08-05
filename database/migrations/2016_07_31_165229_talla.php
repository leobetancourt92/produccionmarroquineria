<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Talla extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('talla', function(Blueprint $table)
            {
                    $table->integer('tal_id')->primary();
                    $table->string('tal_dimension');
                    $table->integer('tip_pro_id');
                    $table->foreign('tip_pro_id')
                               ->references('tip_pro_id') 
                              ->on('tipo_producto')
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
            Schema::drop('talla');
	}

}
