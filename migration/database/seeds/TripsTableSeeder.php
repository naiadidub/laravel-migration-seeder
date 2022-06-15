<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
        $newTrip = new Trip();
        $newTrip->title =$faker->company();
        $newTrip->luogo_di_partenza=$faker->city();
        $newTrip->luogo_di_atterraggio=$faker->city();
        $newTrip->data_partenza=$faker->date();
        $newTrip->ora_partenza=$faker->date('H:i');
        $newTrip->data_ritorno=$faker->date();
        $newTrip->ora_ritorno=$faker->date('H:i');
        $newTrip->prezzo=$faker->randomFloat(1, 2000, 3000);
        $newTrip->save(); 
        }
    }
}