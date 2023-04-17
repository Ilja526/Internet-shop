<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniqueOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unique_offer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('username');
            $table->string('email');
            $table->string('unique_offers');
            $table->string('name_card');
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
        Schema::dropIfExists('unique_offer');
    }
}
