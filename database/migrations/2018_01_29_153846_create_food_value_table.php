<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilaiMakanan', function (Blueprint $table) {
            $table->increments('id');
            $table->float('nilai_makanan1');
            $table->float('nilai_makanan2');
            $table->float('nilai_makanan3');
            $table->float('nilai_makanan4');
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
        Schema::dropIfExists('food_value');
    }
}
