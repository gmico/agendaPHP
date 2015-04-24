<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoblacionsAndVotantsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poblacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom')->default('');
			$table->string('habitants')->default('');
			$table->timestamps();
		$table->string('slug')->default('');
		});

		Schema::create('votants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('dni')->unique();
			$table->string('nom')->default('');
			$table->string('datanaixament')->default('');
			$table->timestamps();
			$table->timestamps();
			$table->number('poble');
			$table->string('slug')->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('poblacions');
		Schema::drop('votants');
	}

}
