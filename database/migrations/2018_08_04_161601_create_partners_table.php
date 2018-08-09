<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('link');
            $table->text('short')->nullable();
            $table->integer('order')->default(1);
            $table->string('image')->nullable();
            $table->boolean('is_visible')->defautl(1);
            $table->timestamps();
        });

        Schema::create('beauty_box_partner', function (Blueprint $table) {
            $table->integer('beauty_box_id')->unsigned()->index();
            $table->foreign('beauty_box_id')->references('id')->on('beauty_boxes')->onDelete('cascade');

            $table->integer('partner_id')->unsigned()->index();
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
        Schema::dropIfExists('beauty_box_partner');
    }
}
