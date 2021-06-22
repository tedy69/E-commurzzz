<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictVillages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->integer('district_id')->after('regencies_id');
            $table->integer('village_id')->after('district_id');
            $table->integer('district_id')->nullable()->change();
            // $table->integer('village_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('district_id')->nullable(false)->change();
            // $table->integer('village_id')->nullable(false)->change();
        });
    }
}