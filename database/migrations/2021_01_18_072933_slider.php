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
            $table->dateTime('active_from');
            $table->dateTime('active_to');
            $table->string('img_static')->nullable();
            $table->string('img_static_alt');
            $table->string('img_hover');
            $table->string('img_hover_alt');
            $table->integer('sale');
            $table->text('btn_name');
            $table->string('discount')->nullable();
            $table->string('desc');
            $table->string('coupone');
            $table->string('time');
            $table->text('link');
            $table->timestamps();

        });
        // DB::table('sliders')->insert([
        //     'name' => 'mirkorma.ru',
        //     'active_from' => '2020-12-06 21:00:00',
        //     'active_to' => '2021-12-12 08:59:59',
        //     'img_static'=> '/storage/photos/VDKVxA9vBHwE0IzOniPXlc3fYNUZRa2QUDbSiygY.png',
        //     'img_static_alt' => 'item-static-alt0',
        //     'img_hover'=> '/storage/photos/HRIamuYsnzCeP6bPsz0PUpUO03aEPJGFAQGJIuCI.png',
        //     'img_hover_alt'=> 'item-static-alt0',
        //     'sale'=>25,
        //     'btn_name'=>'Получить',
        //     'discount'=> NULL,
        //     'desc'=>'На покупку рационов Ekaunuba на сайте <a href="https://www.mirkorma.ru/brands/eukanuba" target="_blank">mirkorma.ru</a> по промокоду:',
        //     'coupone'=>'RLD20',
        //     'time'=>'Промокод действителен до 31.03.2021 только при попупке онлайн.',
        //     'link'=>'https://www.mirkorma.ru/brands/eukanuba/',
        //     'btn_name'=>'Получить'

            

        // ]);
        

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
