<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCriteria1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilaisub1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ba1');
            $table->integer('ca1');
            $table->integer('cb1');
            $table->integer('ba2');
            $table->integer('ca2');
            $table->integer('cb2');
            $table->integer('ba3');
            $table->integer('ca3');
            $table->integer('cb3');
            $table->integer('ba4');
            $table->integer('ca4');
            $table->integer('cb4');
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
        Schema::dropIfExists('sub_criteria_1');
    }
}
