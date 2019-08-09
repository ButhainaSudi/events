<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_businesses', function (Blueprint $table) {
            $table->string('business_email')->unique();
            $table->string('business_name');
            $table->string('business_mode');
            $table->string('business_details');
            $table->string('business_key');
            $table->string('business_verification');
            $table->string('manage_version');
            $table->foreign('manage_version')->references('version')->on('manage_apps')->onDelete('cascade');

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
        Schema::dropIfExists('client_businesses');
    }
}
