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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->date('date_of_departure');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time', $precision = 6);
            $table->time('arrival_time', $precision = 6);
            $table->string('train_code', 5);
            $table->smallInteger('carriages_number')->unsigned();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
