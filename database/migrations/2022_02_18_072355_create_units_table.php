<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->String('SmartMeterID');
            $table->float('Tegangan');
            $table->float('Arus');
            $table->float('Daya');
            $table->float('Frekuensi');
            $table->float('Energi');
            $table->float('PowerFactor');
            $table->String('SumberEnergi');
            $table->datetime('tanggalTerima');
            $table->datetime('tanggalKirim');
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
        Schema::dropIfExists('units');
    }
}
