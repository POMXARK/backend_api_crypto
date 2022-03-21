<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEthereumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethereums', function (Blueprint $table) {
            $table->date('date');
            $table->decimal('txVolume(USD)');
            $table->decimal('adjustedTxVolume(USD)');
            $table->integer('txCount');
            $table->decimal('marketcap(USD)');
            $table->decimal('price(USD)');
            $table->decimal('exchangeVolume(USD)');
            $table->decimal('generatedCoins');
            $table->decimal('fees');
            $table->decimal('activeAddresses');
            $table->decimal('medianTxValue(USD)');
            $table->decimal('medianFee');
            $table->decimal('averageDifficulty');
            $table->integer('paymentCount');
            $table->integer('blockSize');
            $table->integer('blockCount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ethereums');
    }
}
