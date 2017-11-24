<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmitents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('symbol', 10);
            $table->string('exchange', 10);
            $table->string('id_emiten', 20);
            $table->string('name_emiten');
            $table->string('rmids');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emitents');
    }
}
