<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_date');
             $table->string('order_recieve_date');
              $table->string('order_giveback_date');
               $table->string('extra_note');
               $table->string('statement_id');
                $table->string('service_id'); 
                 $table->string('location_id');
                 $table->string('customer_id')->nullable();
                  $table->integer('deleted')->default(0);  
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
        Schema::dropIfExists('orders');
    }
}
