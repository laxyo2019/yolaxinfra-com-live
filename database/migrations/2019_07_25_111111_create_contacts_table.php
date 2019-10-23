<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_key');
            $table->string('name',100);
            $table->string('company_name');
            $table->string('email');
            $table->string('mobile',20);
            $table->string('plant');
            $table->string('state',150);
            $table->string('open_power');
            $table->string('captive_power');
            $table->string('capacity');
            $table->string('power_consumption');
            $table->string('steam');
            $table->string('steam_consumption');
            $table->string('production');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
