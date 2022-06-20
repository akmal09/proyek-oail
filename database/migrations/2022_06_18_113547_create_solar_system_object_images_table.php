<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('solar_system_object_images', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("teleskop");
            $table->string("detektor");
            $table->text("filter")->nullable();
            $table->date("date_and_time")->format("Y-m-d H:i:s");
            $table->text("raw_data");
            $table->text("reduced_data");
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
        Schema::dropIfExists('solar_system_object_images');
    }
};
