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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->integer('product_id');
            $table->string('order_code');
            $table->string('bank_name');
            $table->string('phone_number');
            $table->string('tns_number');
            $table->string('price');
            $table->string('service_fee')->nullable();
            $table->string('total_amount');
            $table->string('status')->default(1)->comment('1 = pending, 2 = approved, 3 = rejected');
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
        Schema::dropIfExists('product_orders');
    }
};
