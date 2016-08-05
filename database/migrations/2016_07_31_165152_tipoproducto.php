<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipoproducto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('tipo_producto', function(Blueprint $table)
            {
                    $table->integer('tip_pro_id')->primary();
                    $table->string('tip_descripcion');
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
            Schema::drop('tipo_producto');
	}

}
