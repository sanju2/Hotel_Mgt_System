<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_guide_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('dob');
            $table->string('email');
            $table->integer('pno');
            $table->string('address');
            $table->string('gender');
            $table->string('experience');
            $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('_guide_profile');
    }
}
