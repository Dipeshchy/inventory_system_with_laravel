<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabourLedgerEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour_ledger_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('labour_id');
            $table->string('date');
            $table->longText('description');
            $table->bigInteger('debit');
            $table->bigInteger('credit');
            $table->bigInteger('balance');
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
        Schema::dropIfExists('labour_ledger_entries');
    }
}
