<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTablle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codenumber');
            $table->string('name');
            $table->string('description');
            $table->string('edition');
            $table->string('price')->nullable();
            $table->string('author_id')->nullable();
            $table->string('genre_id')->nullable();
            $table->string('image')->nullable();
            $table->string('save_pdf')->nullable();
            $table->string('publishing_date')->nullable();
            $table->string('free')->nullable();
            $table->string('deleted')->nullable();
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
        Schema::dropIfExists('books');
    }
}