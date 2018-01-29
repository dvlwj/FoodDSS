<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriaValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilaikrit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lem_pro');
            $table->integer('ome_pro');
            $table->integer('ome_lem');
            $table->integer('ser_pro');
            $table->integer('ser_lem');
            $table->integer('ser_ome');
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
        Schema::dropIfExists('criteria_value');
    }
}
