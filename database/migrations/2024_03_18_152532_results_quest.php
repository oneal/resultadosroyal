<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResultsQuest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results_quests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year_id')->unsigned();
            $table->integer('theme_id')->unsigned();
            $table->text('quest');
            $table->text('description');
            $table->text('img');
            $table->foreign('theme_id')->references('id')->on('results_theme');
            $table->foreign('year_id')->references('id')->on('results_year');
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
        Schema::dropIfExists('results_quests');
    }
}
