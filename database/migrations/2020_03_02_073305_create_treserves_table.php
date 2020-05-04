<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treserves', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cid')->unsigned();
            $table->foreign('cid')->references('id')->on('customers');

            $table->integer('tour_no');
            $table->foreign('tour_no')->references('id')->on('tours');

            $table->integer('t_id');
            $table->foreign('t_id')->references('id')->on('tour_types');

            $table->timestamp('resereved_date_time')->useCurrent();
            $table->date('check_in');
            $table->date('check_out');

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
        Schema::dropIfExists('treserves');
    }
}
