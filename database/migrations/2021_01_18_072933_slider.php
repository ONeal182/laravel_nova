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
            $table->string('img_static');
            $table->string('img_static-alt');
            $table->string('img_hover');
            $table->string('img_hover-alt');
            $table->string('sale');
            $table->string('get');
            $table->string('discount');
            $table->string('desc');
            $table->string('coupone');
            $table->string('time');
            $table->text('link');
            $table->date('created_at');
            $table->date('updated_at');

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
