<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailEmitens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_emitens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seqnbr');
            $table->string('id_emiten',20);
            $table->string('f_reuters_url');
            $table->dateTime('f_recent_quarter_date');
            $table->dateTime('f_annual_date');
            $table->dateTime('f_ttm_date');
            $table->dateTime('kr_recent_quarter_date');
            $table->dateTime('kr_annual_date');
            $table->dateTime('kr_ttm_date');
            $table->decimal('change', 18, 10);
            $table->decimal('price', 18, 10);
            $table->decimal('change_percentage', 18, 10);
            $table->string('change_column', 10);
            $table->decimal('open_price', 18, 10);
            $table->decimal('high_price', 18, 10);
            $table->decimal('low_price', 18, 10);
            $table->string('volumn', 10);
            $table->string('volumn_average', 10);
            $table->decimal('high_price_52_week', 18, 10);
            $table->decimal('low_price_52_week', 18, 10);
            $table->string('market_capitalization', 14);
            $table->decimal('price_earning_ratio', 18, 10);
            $table->string('fwpe', 14);
            $table->string('beta', 14);
            $table->decimal('eps', 18, 10);
            $table->decimal('dividen_yield', 18, 10);
            $table->decimal('last_dividen_yield', 18, 10);
            $table->decimal('shares', 18, 10);
            $table->string('instown', 14);
            $table->string('eo', 14);
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
        Schema::drop('detail_emitens');
    }
}
