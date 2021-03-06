<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodicalsubmattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodicalsubmatters', function (Blueprint $table) {
            $table->integer('periodicals_id')->unsigned()->index();
            $table->integer('subectmatters_id')->unsigned()->index();
            $table->foreign('periodicals_id')->references('id')->on('periodicals')->onDelete('cascade');
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
        Schema::dropIfExists('periodicalsubmatters');
    }
}
