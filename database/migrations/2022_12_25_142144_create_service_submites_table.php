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
        Schema::create('service_submites', function (Blueprint $table) {
            $table->id();
            $table->integer('bid_id');
            $table->integer('service_id');
            $table->integer('buyer_id');
            $table->integer('seller_id');
            $table->string('submition_document')->nullable();
            $table->string('submition_externalLink')->nullable();
            $table->longText('submition_drescreption');
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
        Schema::dropIfExists('service_submites');
    }
};
