<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        	'id'=>"1",
        	'service_name'=>"Oil and oil filter Change and replacement",
        	'service_type'=>"Oil and oil filter Change and replacement",
        	'service_price'=>"$10",
        	
        ]);
         DB::table('services')->insert([
            'id'=>"2",
            'service_name'=>"Brake fluid check and top up",
            'service_type'=>"Brake fluid check and top up",
            'service_price'=>"$20",
            
        ]);
          DB::table('services')->insert([
            'id'=>"3",
            'service_name'=>"Anti-Freeze coolant check and top up",
            'service_type'=>"Anti-Freeze coolant check and top up",
            'service_price'=>"$30",
            
        ]);
           DB::table('services')->insert([
            'id'=>"4",
            'service_name'=>"Windscreen wash check and top up",
            'service_type'=>"Windscreen wash check and top up",
            'service_price'=>"$40",
            
        ]);
            DB::table('services')->insert([
            'id'=>"5",
            'service_name'=>"Full brake check",
            'service_type'=>"Full brake check",
            'service_price'=>"$50",
            
        ]);
    }
}
