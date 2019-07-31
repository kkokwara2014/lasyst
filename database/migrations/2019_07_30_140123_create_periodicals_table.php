<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('slug');
            $table->text('publisher')->nullable();
            $table->text('dateofpub')->nullable();
            $table->text('issn')->nullable();
            $table->text('author');
            $table->text('authors')->nullable();
            $table->text('qty');
            $table->integer('issue_id')->nullable();
            $table->integer('volume_id')->nullable();
            $table->integer('shelf_id')->nullable();
            $table->integer('ptype_id')->nullable();
            $table->integer('psource_id')->nullable();
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
        Schema::dropIfExists('periodicals');
    }
}
