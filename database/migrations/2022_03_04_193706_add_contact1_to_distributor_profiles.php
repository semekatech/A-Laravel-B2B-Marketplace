<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContact1ToDistributorProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distributor_profiles', function (Blueprint $table) {
            $table->string('contact1');
            $table->string('contact2');
            $table->string('image');
            $table->string('store_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('distributor_profiles', function (Blueprint $table) {
            $table->dropColumns('contact1');
            $table->dropColumns('contact2');
            $table->dropColumns('image');
            $table->dropColumns('store_description');
        });
    }
}
