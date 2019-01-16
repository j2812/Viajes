<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city', 100)->nullable();
            $table->string('description');
            $table->float('price', 8 , 2);
            $table->timestamp('fromDay');
            $table->timestamp('toDay');
            $table->boolean('hasDiscount')->default(0);
            $table->float('discountPercent', 2 , 1)->nullable(true);
            $table->string('file', 128)->nullable(true);
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
        Schema::dropIfExists('offers');
    }
}
