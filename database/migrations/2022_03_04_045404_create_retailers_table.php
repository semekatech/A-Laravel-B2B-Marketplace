<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailers', function (Blueprint $table) {
            $table->id();
          
            $table->string('store',150);
            $table->string('category',150);
            $table->string('region',150);
            $table->string('county',150);
            $table->string('town',150);
            $table->longText('location_description',150);
            $table->string('mobile1',150);
            $table->string('mobile2',150);
            $table->longText('store_description',150);
            $table->string('image',150);
            $table->string('retailer_id',150);
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
        Schema::dropIfExists('retailers');
    }
}
