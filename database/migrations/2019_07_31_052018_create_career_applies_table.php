<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_applies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_key');
            $table->Biginteger('job_id');
            $table->string('name',50);
            $table->string('email',100);
            $table->string('mobileno',20);
            $table->string('file');
            $table->string('doc_url');
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
        Schema::dropIfExists('career_applies');
    }
}
