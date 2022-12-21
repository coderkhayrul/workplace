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
        Schema::create('order_completes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('start_date');
            $table->string('service_id');
            $table->string('bid_id');
            $table->string('buyer_id');
            $table->string('seller_id');
            $table->string('duration');
            $table->string('price');
            $table->string('status');
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
        Schema::dropIfExists('order_completes');
    }
};
