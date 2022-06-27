<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {

            $new_train = new Train();

            $new_train->agency = $faker->randomElement(['Adriafer', 'Captrain Italia', 'Compagnia Ferroviaria Italiana', 'DB Cargo Italia', 'Dinazzano PO' ]);
            $new_train->departure_station = $faker->randomElement(['Milano', 'Roma', 'Torino', 'Caserta' ]);
            $new_train->arrival_station = $faker->randomElement(['Teramo', 'Giulianova', 'Como', 'Terni']);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numberBetween(100, 10000000);
            $new_train->carriages_number = $faker->numberBetween(10,255);
            $new_train->train_on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}
