<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeautyBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beauty_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('overtitle')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('link')->nullable();
            $table->float('price')->default(0);
            $table->string('image')->nullable();
            $table->timestamp('start_from')->nullable();
            $table->timestamp('end_to')->nullable();
            $table->boolean('is_visible')->default(1);
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
        Schema::dropIfExists('beauty_boxes');
    }
}
