<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBascetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bascets', function (Blueprint $table) {
            $table->id();
            $table->string('p_name',255);
            $table->bigInteger('p_id');
            $table->double('b_quantity',15,3)->nullable();;
            $table->double('p_price',15,2)->nullable();
            $table->double('b_sum',15,2)->nullable();;
            $table->bigInteger('c_id');
            $table->bigInteger('status_id')->nullable();
            $table->bigInteger('r_id')->nullable();
            $table->bigInteger('unit_id');
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
        Schema::dropIfExists('bascets');
    }
}
