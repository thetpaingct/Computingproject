<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
        	'id'=>"1",
        	'order_date'=>"2018-12-29",
        	'order_recieve_date'=>"2018-12-29",
        	'order_giveback_date'=>"2018-12-29",
        	'extra_note'=>"",
        	'statement_id'=>"1",
        	'service_id'=>"1",
        	'location_id'=>"1",
        	'customer_id'=>"1",
        	


        	
        ]);
         DB::table('orders')->insert([
        	'id'=>"2",
        	'order_date'=>"2018-12-29",
        	'order_recieve_date'=>"2018-12-29",
        	'order_giveback_date'=>"2018-12-29",
        	'extra_note'=>"",
        	'statement_id'=>"2",
        	'service_id'=>"2",
        	'location_id'=>"2",
        	'customer_id'=>"2",
        	


        	
        ]);
        
    }
}
