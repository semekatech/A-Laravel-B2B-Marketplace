<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('category');
            $table->string('region');
            $table->string('county');
            $table->string('town');
            $table->string('location_description');
            $table->string('deliverystatus');
            $table->string('working_days');
            $table->string('distributor_id');
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
        Schema::dropIfExists('distributor_profiles');
    }
}
