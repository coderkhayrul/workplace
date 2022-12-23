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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->integer('cat_id');
            $table->integer('user_id');
            $table->string('shortDes');
            $table->longText('longdes');
            $table->text('document');
            $table->integer('price');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('status')->default(2)->comment('1 for approve 2 for un approve');
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
        Schema::dropIfExists('services');
    }
};
