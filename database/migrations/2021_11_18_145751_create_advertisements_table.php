<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('store_id');
            $table->bigInteger('product_id');
            $table->string('title');
            $table->dateTime('started_date');
            $table->dateTime('ended_date');
            $table->text('content');
            $table->string('image')->nullable();
            $table->tinyInteger('published_flag')->default(0);
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
        Schema::dropIfExists('advertisements');
    }
}
