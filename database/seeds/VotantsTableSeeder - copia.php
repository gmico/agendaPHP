<?php
 
use Illuminate\Database\Seeder;
 
class VotantsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('votants')->delete();
 
        $votants = array(
            
            ['id' => 1, 'dni' => '12345678R', 'nom' => 'guillem', 'datanaixament' => '21/12/1984', 'updated_at' => new DateTime],
            ['id' => 2, 'dni' => '22345678G', 'nom' => 'edu', 'datanaixament' => '12/10/1994', 'updated_at' => new DateTime],
            ['id' => 3, 'dni' => '32345678H', 'nom' => 'miriam', 'datanaixament' => '13/11/1974', 'updated_at' => new DateTime],
            ['id' => 4, 'dni' => '42345678E', 'nom' => 'olek', 'datanaixament' => '24/04/1989', 'updated_at' => new DateTime],
            ['id' => 5, 'dni' => '72345678V', 'nom' => 'richar', 'datanaixament' => '02/12/2010', 'updated_at' => new DateTime],
            ['id' => 6, 'dni' => '92345678W', 'nom' => 'alberto', 'datanaixament' => '08/06/1987', 'updated_at' => new DateTime],
            ['id' => 7, 'dni' => '77745678B', 'nom' => 'joanillo', 'datanaixament' => '26/08/1964', 'updated_at' => new DateTime],
            ['id' => 8, 'dni' => '78945678T', 'nom' => 'bernat', 'datanaixament' => '10/04/1954', 'updated_at' => new DateTime],
            ['id' => 9, 'dni' => '54345678A', 'nom' => 'cristina', 'datanaixament' => '22/01/1999', 'updated_at' => new DateTime],
            ['id' => 10, 'dni' => '76586678R', 'nom' => 'vanesa', 'datanaixament' => '30/09/1990', 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('votants')->insert($votants);
    }
 
}