<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorieHasProducten extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorie_has_producten', function(Blueprint $table)
		{
			$table->increments('id');
            $table->foreign('categorie_id')->references('id')->on('categorien');
            $table->foreign('product_id')->references('id')->on('producten');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorie_has_producten');
	}

}
