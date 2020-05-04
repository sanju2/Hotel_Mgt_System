<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_types', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');

            $table->string('name', 20);
            $table->integer('total')->default(0);
            $table->integer('available')->default(0);;
            $table->string('description')->nullable();
            $table->double('base_price');

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
        Schema::dropIfExists('tour_types');
    }
}
