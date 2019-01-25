<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
        	'id'=>"1",
        	'NRC'=>"G1819019U",
        	'customer_name'=>"Thet Paing Htet",
        	'address'=>"BLK 351",
        	'additional_notes'=>"Good",
        	'phone_no'=>"6587397730",
            'gmail'=>"thetpaing.ct@gmail.com",
            'vehicle'=>"B/12032"
        	]);   
DB::table('customers')->insert([
        	'id'=>"2",
        	'NRC'=>"H2654782E",
        	'customer_name'=>"Pinky",
        	'address'=>"BLK 354",
        	'additional_notes'=>"Bad",
            'phone_no'=>"6543567765",
            'gmail'=>"pinky@gmail.com",
            'vehicle'=>"C/29876"
        	]);

        	 }
}
