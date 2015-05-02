<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		//$this->call('PoblacionsTableSeeder');
		//$this->call('VotantsTableSeeder');
		$this->call('CitasTableSeeder');
		$this->call('ContactosTableSeeder');
		$this->call('CitaContactoTableSeeder');

		// $this->call('UserTableSeeder');
	}

}
