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
            $table->string('active');
            $table->string('name');
            $table->text('link');
            $table->string('img_static')->nullable();
            $table->string('img_hover');
            $table->integer('sale');
            $table->text('btn_name');
            $table->string('btn_name2');
            $table->string('discount')->nullable();
            // $table->string('desc');
            $table->string('coupone');
            $table->string('time');
            $table->timestamps();
            // $table->dateTime('active_from');
            // $table->dateTime('active_to');
            
            // $table->string('img_static_alt');
            
            // $table->string('img_hover_alt');
            
            
            

        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sliders');
    }
}
