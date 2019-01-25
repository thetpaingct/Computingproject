<?php

use Illuminate\Database\Seeder;

class StatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statements')->insert([
        	'id'=>"1",
        	'statement_type'=>"order on going"
        	
        	
        ]);
        DB::table('statements')->insert([
        	'id'=>"2",
        	'statement_type'=>"order recieve"
        	
        	
        ]);
        DB::table('statements')->insert([
        	'id'=>"3",
        	'statement_type'=>"order on progress"
        	
        	
        ]);
          DB::table('statements')->insert([
        	'id'=>"4",
        	'statement_type'=>"order finsish"
        	
        	
        ]);
           DB::table('statements')->insert([
        	'id'=>"5",
        	'statement_type'=>"order give back"
        	
        	
        ]);
            DB::table('statements')->insert([
        	'id'=>"6",
        	'statement_type'=>"order closed"
        	
        	
        ]);
    }
}
