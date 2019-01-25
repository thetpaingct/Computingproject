<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounts')->insert([
        	'name'=>'Paing',
        	'email'=>'admin@gmail.com',
        	'password'=>Hash::make('admin123'),
        	'phone_no'=>' 09795277962',
        	'role_id'=>'2',]);

        DB::table('accounts')->insert([
            'name'=>'Pinky',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user123'),
            'phone_no'=>' 09795277962',
            'role_id'=>'1',]);
    }
}
