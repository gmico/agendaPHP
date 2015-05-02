<?php
 
use Illuminate\Database\Seeder;
 
class CitaContactoTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('cita_contacto')->delete();
 
        $cita_contacto = array(
            
            ['cita_id' => 1, 'contacto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime], 
            ['cita_id' => 2, 'contacto_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime], 
            ['cita_id' => 2, 'contacto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 1, 'contacto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime], 
            ['cita_id' => 3, 'contacto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime], 
            ['cita_id' => 3, 'contacto_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['cita_id' => 3, 'contacto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
 
        //// Uncomment the below to run the seeder
        DB::table('cita_contacto')->insert($cita_contacto);
    }
 
}