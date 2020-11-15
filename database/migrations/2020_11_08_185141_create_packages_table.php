<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string("Title");
            $table->string("From")->default("Cairo");
            $table->string("Destination");
            $table->text("Description");
            $table->string("Price");
            $table->integer("num_of_people");
            $table->string('Image');
            $table->date("Returning");
            $table->date("Departing");
            $table->text("Include")->nullable();
            $table->text("Exclude")->nullable();
            $table->integer("Min_Age")->default("12");
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->unsignedBigInteger('plane_id');
            $table->foreign('plane_id')->references('id')->on('planes')->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
}
