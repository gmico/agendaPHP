<?php
 
use Illuminate\Database\Seeder;
 
class CitasTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('citas')->delete();
 
      $citas = array(
            
            ['id' => 1, 'titol' => 'PHP Learning', 'descripcio' => 'descripcion1', 'lloc'=> 'Jaume Balmes' , 'datacita'=> new DateTime ,'slug' => 'cit1','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'titol' => 'Java forever', 'descripcio' => 'descripcion2', 'lloc'=> 'Barcelona Fira' , 'datacita'=> new DateTime ,'slug' => 'cit1','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'titol' => 'Android the best', 'descripcio' => 'descripcion3', 'lloc'=> 'Google' , 'datacita'=> new DateTime ,'slug' => 'cit1','created_at' => new DateTime, 'updated_at' => new DateTime]

        );
 
        //// Uncomment the below to run the seeder
        DB::table('citas')->insert($citas);
    }
 
}