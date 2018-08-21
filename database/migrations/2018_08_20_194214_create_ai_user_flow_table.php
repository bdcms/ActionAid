<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiUserFlowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_userFlow', function (Blueprint $table) {
            $table->increments('uf_id');
            $table->integer('userId');
            $table->integer('uf_CountryId')->default(1);
            $table->integer('uf_hofspId')->default(0);
            $table->integer('uf_hubCoordinatorId')->default(0);
            $table->integer('uf_hoppId')->default(0);
            $table->integer('uf_lineManagerId')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ai_userFlow');
    }
}
