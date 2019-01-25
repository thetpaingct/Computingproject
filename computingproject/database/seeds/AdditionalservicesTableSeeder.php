<?php

use Illuminate\Database\Seeder;

class AdditionalservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additionalservices')->insert([
        	'id'=>"1",
        	'ad_name'=>"clean service",
        	'ad_price'=>"$20",
        ]);
        DB::table('additionalservices')->insert([
        	'id'=>"2",
        	'ad_name'=>"Dry service",
        	'ad_price'=>"$30",
        ]);

    }
}
