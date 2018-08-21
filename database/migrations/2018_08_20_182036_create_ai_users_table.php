<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_users', function (Blueprint $table) {
            $table->increments('us_id');
            $table->string('us_fullName')->nullable();
            $table->string('us_email')->unique();
            $table->string('us_password');
            $table->string('us_profileImg')->nullable();
            $table->integer('us_mobile')->nullable();
            $table->string('us_location')->nullable();
            $table->integer('role_id');
            $table->integer('us_status')->default(1);
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
        Schema::dropIfExists('ai_users');
    }
}
