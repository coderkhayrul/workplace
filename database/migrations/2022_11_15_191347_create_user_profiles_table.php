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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('profile_id');
            $table->integer('user_id');
            $table->string('full_name')->nullable();
            $table->string('description')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('present_address')->nullable();
            $table->string('parmenent_address')->nullable();
            $table->unsignedBigInteger('national_id')->nullable();
            $table->string('balance')->default(0);
            $table->string('user_skill')->nullable();
            $table->string('user_position')->nullable();
            $table->integer('online_status')->default(1);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('user_profiles');
    }
};
