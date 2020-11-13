<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->integer('from_statement');
            $table->string('financial_instrument_code');
            $table->string('action');
            $table->float('entry_price');
            $table->float('closed_price');
            $table->float('take_profit_1');
            $table->float('stop_loss_1');
            $table->float('signal_result');
            $table->integer('status');
            $table->bigInteger('statement_batch');
            $table->datetime('closed_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
