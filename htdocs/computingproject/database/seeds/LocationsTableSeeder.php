<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('locations')->insert([
        	'id'=>"1",
        	'location_name'=>"Jurong East",
        	
        ]);
         DB::table('locations')->insert([
        	'id'=>"2",
        	'location_name'=>"Clementi",
        	
        ]);
    }
}
