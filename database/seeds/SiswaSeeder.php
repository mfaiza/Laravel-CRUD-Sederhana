<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 20; $i++) { 
        	// insert data dengan faker
        	DB::table('siswa')->insert([
        		'nis' => $faker->numberBetween($min=0000000, $max=999999),
        		'nama' => $faker->name,
        		'rombel' => $faker->city,
        		'rayon' => $faker->country,
        		'jk' => $faker->randomElement($array = array('pria','wanita')),
        		'alamat' => $faker->address,
        		'no_hp' => $faker->phoneNumber
        	]);
        }
    }
}
