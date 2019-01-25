<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NRC');
            $table->string('customer_name');
            $table->string('gmail');
            $table->string('phone_no');
            $table->string('address');
            $table->string('additional_notes')->nullable();
            $table->string('vehicle');
            // $table->string('vehical_id')->nullable();
            $table->string('customer_at_id')->nullable();
            $table->integer('deleted')->default(0);
            // $table->string('order_id')->nullable();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
