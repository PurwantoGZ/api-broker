<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmitentFinancials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitent_financials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seqnbr');
            $table->string('id_emiten',20);
            $table->string('f_type',100);
            $table->mediumText('url');
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
        Schema::drop('emitent_financials');
    }
}
