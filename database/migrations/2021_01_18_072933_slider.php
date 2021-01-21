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
            $table->date('active_from');
            $table->date('active_to');
            $table->string('img_static');
            $table->string('img_static_alt');
            $table->string('img_hover');
            $table->string('img_hover_alt');
            $table->string('sale');
            $table->string('get');
            $table->string('discount');
            $table->string('desc');
            $table->string('coupone');
            $table->string('time');
            $table->text('link');
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
        //
    }
}
