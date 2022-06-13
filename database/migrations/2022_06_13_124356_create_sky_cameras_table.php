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
        Schema::create('sky_cameras', function (Blueprint $table) {
            $table->id();
            $table->timestamp("date")->format("Y-m-d");
            $table->timestamp("time")->format("hh-mm-ss");
            $table->text("low_res_image");
            $table->text("high_res_image");
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
        Schema::dropIfExists('sky_cameras');
    }
};
