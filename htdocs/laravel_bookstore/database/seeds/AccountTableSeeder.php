<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
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
'name' => "tph",
'email' =>"tph@mail.com",
'password' =>"123456",
'role_id' => "1"

        ]);
    }
}
