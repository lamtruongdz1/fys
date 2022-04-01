<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateYardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique();
            $table->string('slug',150)->unique();
            $table->timestamps();
            // $table->foreign('id')->references('id_districts')->on('yards');
        });

        Schema::create('yards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('price');
            $table->string('img');
            $table->string('view')->default('0');;
            $table->string('time_open')->default('08:00');
            $table->string('time_close')->default('23:00');
            $table->string('total_booking')->nullable();;
            $table->string('address');
            $table->text('description')->nullable();;
            $table->unsignedBigInteger('id_districts');
            $table->foreign('id_districts')->references('id')->on('districts');;
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('yards');
    }
}
