<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositLogTable extends Migration
{
    public function up()
    {
        Schema::create('deposit_log', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('amount');
            $table->string('currency')->default('EUR');
            $table->string('source')->default('stripe');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deposit_log');
    }
}
