<?php

use App\Ride;
use Illuminate\Database\Seeder;

class RidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rides = factory(Ride::class, 20)->create();
    }
}
