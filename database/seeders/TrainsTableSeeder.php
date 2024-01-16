<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $train = new Train();
            $train->agency = $faker->company();
            $train->date_of_departure = $faker->randomElement(['2024_01_16', '2024_01_17','2024_01_22','2024_02_01','2021_02_03']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->bothify('??###');
            $train->carriages_number = $faker->numberBetween(1, 10);
            $train->save();

        }
        
    }
}
