<?php
 
use Illuminate\Database\Seeder;
 
class ContactosTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contactos')->delete();
 
        $contactos = array(
            
            ['id' => 1, 'nom' => 'Guillem', 'mail' => 'guillemguapo@gmail.com', 'telefon'=> '666666666' ,'slug' => 'con1','created_at' => new DateTime, 'updated_at' => new DateTime], 
            ['id' => 2, 'nom' => 'Miriam', 'mail' => 'miriam@gmail.com', 'telefon'=> '777777777' ,'slug' => 'con2','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Oleksandr', 'mail' => 'oleksandrguapo@gmail.com', 'telefon'=> '666666666' ,'slug' => 'con3','created_at' => new DateTime , 'updated_at' => new DateTime]
   
        );
 
        //// Uncomment the below to run the seeder
        DB::table('contactos')->insert($contactos);
    }
 
}