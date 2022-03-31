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
        Schema::create('yards', function (Blueprint $table) {
            $table->increments('id');
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
            $table->string('id_districts')->nullable();;
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
