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
        Schema::create('balance_requests', function (Blueprint $table) {
            $table->id('balance_id');
            $table->integer('user_id');
            $table->integer('amount');
            $table->string('method');
            $table->integer('number');
            $table->string('traID');
            $table->integer('status')->default(2)->comment('2= Pending, 1=Success');
            $table->integer('approve_id');
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
        Schema::dropIfExists('balance_requests');
    }
};
