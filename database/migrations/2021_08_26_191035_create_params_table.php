<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('params', function (Blueprint $table) {
            $table->id();
            $table->decimal('price');
            $table->integer('age_for_free');
            $table->string('address');
            $table->string('contact_address');
            $table->string('contact_phone');
            $table->string('date');
            $table->string('timetable');
            $table->integer('edition_number');
            $table->integer('entries_number');
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
        Schema::dropIfExists('params');
    }
}
