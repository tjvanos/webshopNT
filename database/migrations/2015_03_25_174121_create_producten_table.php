<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('producten', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('omschrijving_kort');
            $table->string('omschrijving_lang');
            $table->string('foto_klein');
            $table->string('foto_groot');
            $table->double('prijs');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('producten');
	}

}
