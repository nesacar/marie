<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMagazineColumnToSettingsTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('magazine_title')->after('youtube')->nullable();
            $table->string('magazine_link')->after('magazine_title')->nullable();
            $table->string('magazine_image')->after('magazine_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('magazine_title');
            $table->dropColumn('magazine_link');
            $table->dropColumn('magazine_image');
        });
    }
}
