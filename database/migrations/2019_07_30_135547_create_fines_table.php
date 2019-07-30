<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('finamount', 10, 2);
            $table->date('finstartdate');
            $table->date('finenddate');
            $table->text('finnumofdays');
            $table->decimal('fintotal',10,2);
            $table->boolean('ispaid');
            $table->integer('borrowed_id')->nullable();
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
        Schema::dropIfExists('fines');
    }
}
