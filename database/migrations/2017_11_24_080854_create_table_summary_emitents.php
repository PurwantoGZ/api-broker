<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSummaryEmitents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summary_emitents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seqnbr');
            $table->string('id_emiten',20);
            $table->longText('address_emitent');
            $table->string('phone_emitent');
            $table->string('fax_emitent');
            $table->string('url_emitent');
            $table->longText('overview_emitent');
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
        Schema::drop('summary_emitents');
    }
}
