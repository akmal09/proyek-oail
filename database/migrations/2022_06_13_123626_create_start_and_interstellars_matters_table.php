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
        Schema::create('start_and_interstellars_matters', function (Blueprint $table) 
        {
            $table->id();
            $table->string("object_name");
            $table->timestamp("ra");
            $table->timestamp("dec");
            $table->string("telescope");
            $table->string("detector");
            $table->text("filter")->unsigned()->nullable()->change();
            $table->text("analisator")->unsigned()->nullable()->change();
            $table->date("date");
            $table->timestamp("time");
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
        Schema::dropIfExists('start_and_interstellars_matters');
    }
};
