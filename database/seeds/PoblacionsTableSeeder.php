<?php
 
use Illuminate\Database\Seeder;
 
class PoblacionsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('poblacions')->delete();
 
        $poblacions = array(
            ['id' => 1, 'nom' => 'Barcelona', 'habitants' => '4000000'],
            ['id' => 2, 'nom' => 'Hospitalet', 'habitants' => '200'],
          
        );
 
        // Uncomment the below to run the seeder
        DB::table('poblacions')->insert($poblacions);
    }
 
}
 
