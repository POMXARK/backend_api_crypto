<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBittrexETHUSDDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('bittrex__e_t_h_u_s_d_ds', function (Blueprint $table) {
            $table->string('Timestamp');
            $table->date('date');
            $table->string('Symbol');
            $table->unsignedFloat('Open');
            $table->unsignedFloat('High');
            $table->unsignedFloat('Low');
            $table->unsignedFloat('Close');
            $table->unsignedFloat('ETH');
            $table->unsignedFloat('USD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bittrex__e_t_h_u_s_d_ds');
    }
}
