<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name',255);
            $table->string('p_description',500)->nullable();
            $table->string('p_pic',300)->nullable();
            $table->double('p_quantity',15,3)->nullable();;
            $table->double('p_price',15,2)->nullable();
            $table->bigInteger('scat_id');
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
        Schema::dropIfExists('products');
    }
}
