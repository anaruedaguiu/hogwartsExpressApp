<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_routes', function (Blueprint $table) {
            $table->id();

            $table->string('name',150);
            $table->string('origin',50);
            $table->string('destination',50);
            $table->date('date');
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->string('routeLength',);
            $table->integer('availableSeats');
            $table->string('features');
            $table->string('img');
            
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
        Schema::dropIfExists('train_routes');
    }
};
