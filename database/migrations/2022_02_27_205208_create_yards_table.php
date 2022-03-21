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
            $table->string('name')->nullable();;
            $table->string('price')->nullable();;
            $table->string('img')->nullable();;
            $table->string('view')->nullable();;
            $table->string('total_booking')->nullable();;
            $table->string('address')->nullable();;
            $table->text('description')->nullable();;
            $table->string('id_type')->nullable();;
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
