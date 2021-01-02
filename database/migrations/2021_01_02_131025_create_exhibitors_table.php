<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('phone');
            $table->string('website');
            $table->string('address');
            $table->mediumInteger('postal_code');
            $table->string('city');
            $table->string('country');
            $table->mediumText('description');
            $table->boolean('is_bio');
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
        Schema::dropIfExists('exhibitors');
    }
}
