<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JenishewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    		DB::table('jenis_hewan')->insert([
    			'nama' => 'kambing',
    			'gambar' => $faker->imageUrl($width = 640, $height = 480)
    			
    			
    		]);
 
    }
}
