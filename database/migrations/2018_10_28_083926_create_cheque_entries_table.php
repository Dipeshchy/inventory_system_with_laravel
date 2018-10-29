<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequeEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->string('client_name');
            
            $table->bigInteger('other_cheque');
            $table->bigInteger('amount');
            $table->string('bank');
            $table->integer('cheque_status');
            $table->date('cheque_date');
            $table->enum('cheque_detail',['Returned','Cashed','Bounced']);
            $table->integer('gender');
            $table->text('description');
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
        Schema::dropIfExists('cheque_entries');
    }
}
