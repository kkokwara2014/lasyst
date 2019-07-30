<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('slug');
            $table->text('author');
            $table->text('publisher');
            $table->text('placeofpub');
            $table->text('yearofpub');
            $table->text('isbn');
            $table->text('callnumb');
            $table->text('edition');
            $table->text('addedentry');
            $table->text('qty');
            $table->text('prilpages');
            $table->text('prilpages');
            $table->text('size');
            $table->text('bkimage');
            $table->integer('covertype_id')->nullable();
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
        Schema::dropIfExists('books');
    }
}
