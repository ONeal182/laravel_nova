<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

              $date = [
                [
                        "name"=> "mirkorma.ru",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/mirkorma.png",
                        
                        "img_hover"=> "photos/mirkorma_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://www.mirkorma.ru/brands/eukanuba' tarbtn_name='_blank'>mirkorma.ru</a> по промокоду:",
                        "coupone"=> "RLD20",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://www.mirkorma.ru/brands/eukanuba/",
                        'discount'=> NULL
                    ],
                
                [
                        "name"=> "petfood.ru",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/petfood.png",
                        
                        "img_hover"=> "photos/petfood_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://petfood.ru/collection/eukanuba' tarbtn_name='_blank'>petfood.ru</a> по промокоду:",
                        "coupone"=> "25EKB",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://petfood.ru/collection/eukanuba",
                        'discount'=> NULL
                    ],
                
                [
                        "name"=> "kupi-korm.ru",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/kupi-korm.png",
                        
                        "img_hover"=> "photos/kupi-korm_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://kupi-korm.ru/categories/sukhie-korma?brand=437&indepth=True' tarbtn_name='_blank'>kupi-korm.ru</a> по промокоду:",
                        "coupone"=> "EUKDOG25",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://kupi-korm.ru/categories/sukhie-korma?brand=437&indepth=True",
                        'discount'=> NULL
                    ],
                
                [
                        "name"=> "счастливый-питомец.рф",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/luckypet.png",
                        
                        "img_hover"=> "photos/luckypet_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://xn----7sbgnmcfnotjrboh1ec2f.xn--p1ai/%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B8/eukanuba/' tarbtn_name='_blank'>счастливый-питомец.рф</a> по промокоду:",
                        "coupone"=> "EUKDOG25",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://xn----7sbgnmcfnotjrboh1ec2f.xn--p1ai/%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B8/eukanuba/",
                        'discount'=> NULL,
                    ],
                
                    [
                        "name"=> "zooopt.ru",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/ZooOptru.png",
                        
                        "img_hover"=> "photos/ZooOptru_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba в магазинах и на сайте <a href='https://zoopt.ru/catalog/tovary_dlya_sobak/korm_dlya_sobak/filter/proizvoditel-is-eukanuba/apply/' tarbtn_name='_blank'>zoopt.ru</a> по промокоду:",
                        "coupone"=> "EUKANUBA25",
                        "time"=> "Промокод действителен до 31.03.2021.",
                        "link"=> "https://zoopt.ru/catalog/tovary_dlya_sobak/korm_dlya_sobak/filter/proizvoditel-is-eukanuba/apply/",
                        'discount'=> NULL
                    ],
                    [
                        "name"=> "Филя",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/filya.png",
                        
                        "img_hover"=> "photos/filya_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://www.zootovar-spb.ru/catalog/sobaki.htm?_f[filter][]=78' tarbtn_name='_blank'>zootovar-spb.ru</a> по промокоду:",
                        "coupone"=> "promo25",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://www.zootovar-spb.ru/catalog/sobaki.htm?_f[filter][]=78",
                        'discount'=> NULL
                    ],
                
                [
                        "name"=> "zooregion.ru",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/zooregion.png",
                        
                        "img_hover"=> "photos/zooregion_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://zooregion.ru/catalog/sobaki/korm-dlya-sobak/?vendor=3256&ms|asale=1' tarbtn_name='_blank'>zooregion.ru</a> по промокоду:",
                        "coupone"=> "EUKANUBA2020",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://zooregion.ru/catalog/sobaki/korm-dlya-sobak/?vendor=3256&ms|asale=1",
                        'discount'=> NULL
                    ],
                
                [
                        "name"=> "красный кролик",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/krkrolik.png",
                        
                        "img_hover"=> "photos/krkrolik_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://krkrolik.ru/brands/eukanuba/' tarbtn_name='_blank'>krkrolik.ru</a> по промокоду:",
                        "coupone"=> "экануба25",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://krkrolik.ru/brands/eukanuba/",
                        'discount'=> NULL
                    ],
                
                    [
                        "name"=> "Купитькорм.рф",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/kupitkorm.png",
                        
                        "img_hover"=> "photos/kupitkorm_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://www.xn--h1adbijdkng7g.xn--p1ai/Eukanuba/' tarbtn_name='_blank'>Купитькорм.рф</a> по промокоду:",
                        "coupone"=> "KUPIEUKRF",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://www.xn--h1adbijdkng7g.xn--p1ai/Eukanuba/",
                        'discount'=> NULL
                    ],
                    [
                        "name"=> "Главное хвост",
                        "active"=>"Y",
                        
                        "img_static"=> "photos/glavnoehvost.png",
                        
                        "img_hover"=> "photos/glavnoehvost_hover.png",
                        
                        "sale"=> "25",
                        "btn_name"=> "Получить",
                        "btn_name2"=> "Купить",
                        "discount"=> "Скидка 25%",
                        //"desc"=> "На покупку рационов Ekaunuba на сайте <a href='https://glavnoehvost.ru/katalog/brendy/eukanuba' tarbtn_name='_blank'>glavnoehvost.ru</a> по промокоду:",
                        "coupone"=> "euk25",
                        "time"=> "Промокод действителен до 31.03.2021 только при попупке онлайн.",
                        "link"=> "https://glavnoehvost.ru/katalog/brendy/eukanuba",
                        'discount'=> NULL
                    ]
                ];
               DB::table('sliders')->insert(
                  $date
        
    );
    }
}
