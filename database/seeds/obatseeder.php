<?php

use Illuminate\Database\Seeder;

class obatseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		$limit = 10;
		
		for ($i = 0; $i< $limit; $i++){
			DB::table('tabelobat')->insert([
			'nama_obat' => $faker->name,
			'harga' => $faker->numberBetween($min = 1000, $max = 100000),
			'stok' => $faker->numberBetween($min = 1, $max = 20),
			'expired_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
			'production_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
			]);

		}
    }
}
