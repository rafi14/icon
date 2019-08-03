<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('produksi')->insert([
    			'id_jenishewan' => 1,
    			'berat' => $faker->numberBetween($min = 30, $max = 60),
    			'jumlah' => $faker->numberBetween($min = 1, $max = 10)
    			
    		]);
 
    	}
    }
}
