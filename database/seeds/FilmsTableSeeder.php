<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Film;
class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$faker = Faker::create('pt_BR');

           foreach (range(1,20) as $index) {
           	$name = $faker->name;
           	
	           Film::create([
                'id' => $faker->uuid,
	              'name' => $name,
	              'slug' => str_slug($name),
		            'release' => $faker->date('d/m/Y'),
		            'locale' => $faker->city . ' - ' . $faker->stateAbbr . ', ' . $faker->country,
		            'site' =>  $faker->url,
		            'duration' =>  $faker->numberBetween(40,200),
		            'sinopse' =>  $faker->sentence,
		            'cover' =>   $faker->imageUrl,
	           ]);

          }
    }
}
