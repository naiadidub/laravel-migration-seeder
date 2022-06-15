<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string('luogo_di_partenza', 150);
            $table->string('luogo_di_atterraggio', 150);
            $table->date('data_partenza');
            $table->time('ora_partenza');
            $table->date('data_ritorno')->nullable();
            $table->time('ora_ritorno')->nullable();
            $table->float('prezzo',7,2);
            $table->float('prezzo',7,2);
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
        Schema::dropIfExists('trips');
    }
}
