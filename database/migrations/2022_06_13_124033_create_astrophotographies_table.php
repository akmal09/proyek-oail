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
        Schema::create('astrophotographies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("ra");
            $table->string("dec");
            $table->string("teleskop");
            $table->string("detektor");
            $table->text("analisator");
            $table->date("date_and_time")->format("Y-m-d H:i:s");
            $table->text("raw_data");
            $table->text("final_image");
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
        Schema::dropIfExists('astrophotographies');
    }
};
