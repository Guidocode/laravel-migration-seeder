<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('agency', 100);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time', 0);
            $table->time('arrival_time', 0);
            $table->mediumInteger('train_code')->unsigned();
            $table->tinyInteger('carriages_number')->unsigned();
            $table->boolean('train_on_time')->default(1);
            $table->boolean('cancelled')->default(0);
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
}
