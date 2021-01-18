<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Slider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('activeFrom');
            $table->date('activeTo');
            $table->string('img-static');
            $table->string('img-static-alt');
            $table->string('img-hover');
            $table->string('img-hover-alt');
            $table->string('sale');
            $table->string('get');
            $table->string('discount');
            $table->string('desc');
            $table->string('coupone');
            $table->string('time');
            $table->text('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
