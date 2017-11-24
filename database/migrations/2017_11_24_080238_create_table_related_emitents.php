<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRelatedEmitents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_emitents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seqnbr');
            $table->string('id_emiten',20);
            $table->decimal('price', 18, 10);
            $table->decimal('change_percentage', 18, 10);
            $table->decimal('change', 18, 10);
            $table->string('market_capitalization', 14);
            $table->string('change_column',10);
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
        Schema::drop('related_emitents');
    }
}
