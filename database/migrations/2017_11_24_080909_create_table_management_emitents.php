<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableManagementEmitents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_emitents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seqnbr');
            $table->string('id_emiten',20);
            $table->string('name_management');
            $table->string('age',3);
            $table->string('title_management');
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
        Schema::drop('management_emitents');
    }
}
