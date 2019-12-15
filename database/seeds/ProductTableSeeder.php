<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$faker = Faker\Factory::create();

		foreach (range(1, 6) as $index) {

			Product::create(
				[
					'id'          => Str::uuid(),
					'name'        => $faker->word(),
					'description' => $faker->word(),
					'price'       => $faker->randomFloat(),
				]
			);

		}
	}
}
