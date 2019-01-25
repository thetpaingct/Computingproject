<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // $this->call(UsersTableSeeder::class);
         $this->call(AdditionalservicesTableSeeder::class);
         $this->call(CustomerattitudeTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(LocationsTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
         $this->call(ServicesTableSeeder::class);
         $this->call(StatementsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(VehiclesTableSeeder::class);
         $this->call(AccountsTableSeeder::class);
         $this->call(RolesTableSeeder::class);
    }
}
