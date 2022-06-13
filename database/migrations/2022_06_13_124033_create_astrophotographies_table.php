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
            $table->string("object_name");
            $table->string("ra");
            $table->string("dec");
            $table->string("telescope");
            $table->string("detector");
            $table->string("analisator");
            $table->string("date");
            $table->string("time");
            $table->text("final_image");
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
        Schema::dropIfExists('astrophotographies');
    }
};
