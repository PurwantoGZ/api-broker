<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKeyratios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitent_keyratios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seqnbr');
            $table->string('id_emiten',20);
            $table->string('title_key');
            $table->string('recent_quarter');
            $table->string('annual_key');
            $table->string('ttm');
            $table->timestamps();
            $table->softDeletes();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emitent_keyratios');
    }
}
