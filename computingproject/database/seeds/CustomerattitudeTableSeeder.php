<?php

use Illuminate\Database\Seeder;

class CustomerattitudeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customerattitude')->insert([
        	'id'=>"1",
        	'attitude_level'=>"Good",
        	
        ]);
          DB::table('customerattitude')->insert([
        	'id'=>"2",
        	'attitude_level'=>"Nice",
        	
        ]);
            DB::table('customerattitude')->insert([
        	'id'=>"3",
        	'attitude_level'=>"Worst",
        	
        ]);
    }
}
