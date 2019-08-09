<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_apps', function (Blueprint $table) {
            $table->string('version')->unique();
            $table->string('release_notes');
            $table->string('macos_link')->nullable();
            $table->string('macos_file')->nullable();
            $table->string('windows_link')->nullable();
            $table->string('windows_file')->nullable();
            $table->string('admin_id');
            $table->foreign('admin_id')->references('email_id')->on('admins');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_apps');
    }
}
