<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_system_objects', function ($table) {
            $table->id();
            $table->string("object_name");
            $table->string("telescope");
            $table->string("detector");
            $table->text("filter")->nullable();
            $table->text("analisator")->nullable();
            $table->timestamp("date")->format("Y-m-d");
            $table->timestamp("time")->format("hh-mm-ss");
            $table->text("reduced_data");
            $table->text("raw_data");
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
        Schema::dropIfExists('solar_system_objects');
    }
};
