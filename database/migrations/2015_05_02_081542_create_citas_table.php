<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('citas', function(Blueprint $table)
{

$table->increments('id');
$table->string('titol');
$table->string('descripcio');
$table->string('lloc');
$table->date('datacita');
$table->string('slug');
$table->timestamps();

});

		Schema::create('contactos', function(Blueprint $table)
{

$table->increments('id');
$table->string('nom');
$table->string('mail');
$table->string('telefon');
$table->string('slug');
$table->timestamps();


});
Schema::create('cita_contacto', function(Blueprint $table)
{

$table->integer('cita_id')->unsigned()->index();
$table->foreign('cita_id')->references('id')->on('citas')->onDelete('cascade');

$table->integer('contacto_id')->unsigned()->index();
$table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');
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
		Schema::drop('citas');
				Schema::drop('contactos');
		Schema::drop('cita_contacto');

	}

}
