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
                        
                        "img_static"=> "photos/ShzUJ7JnPnW4ENTYXG0Ha81VTusAsP5HZQts8sSD.png",
                        
                        "img_hover"=> "photos/Fb5ku1roX3S8sJp53odnOUSCuSBgZDJ3J2tRfNLu.png",
                        
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
                        
                        "img_static"=> "photos/Xt46eoPaPozgbVhZAJonrJsb9KvmxfU4dfE5UqhL.png",
                        
                        "img_hover"=> "photos/XNw4kmtLogviXh6zaa3gWCppIlx2spb9nY9zNXjn.png",
                        
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
                        
                        "img_static"=> "photos/Kfro2NHQ7vFILs9vwAlMyChFmhbaxOwyh4SgyyKr.png",
                        
                        "img_hover"=> "photos/02UtWAQ9tYoukVE6QPWGMStYUM0PrTSE49MnlUjs.png",
                        
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
                        
                        "img_static"=> "photos/vKDrMW6jiZUPWmfb50eigTehHt0qr6hLgZe0lHXi.png",
                        
                        "img_hover"=> "photos/Keohta5xZfwvPGbwkkbVVmnWqbTNNPVLHgakqrKu.png",
                        
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
                        
                        "img_static"=> "photos/q8aMyFvYctuew7G8oAkHH6SmRZW5AUKdwNjwKFho.png",
                        
                        "img_hover"=> "photos/I0xTlVq8N5qFKNRyW2wLkbeN3w1S3LNVfwlYsDMZ.png",
                        
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
                        
                        "img_static"=> "photos/U1VwUvQYiLAMv99dh3g52gcllAUu0adA0qGVZzoR.png",
                        
                        "img_hover"=> "photos/2PSNQx4kmcVNGzA1gL2FWq3fFZtoRLrP4VC9Gc3F.png",
                        
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
                        
                        "img_static"=> "photos/NHWvsvoOvhwd9b3nShxlwKu3bhfRxFM9drdGAGl7.png",
                        
                        "img_hover"=> "photos/sv1Dcsi3pMH1aV3iq9JczMruawtIxGL2rsQxCjbp.png",
                        
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
                        
                        "img_static"=> "photos/tYHsHzB6oBttmDtpScdEsuZhU2QlGCVKgb4n2Cb0.png",
                        
                        "img_hover"=> "photos/on57A8Rk8TaYGNpHFcsYDJpOD6FkUhxfcUYYlVFH.png",
                        
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
                        
                        "img_static"=> "photos/2KO3zSXqlZFMiLpGA8rnCipoSRgEnX2DLyPxJQS4.png",
                        
                        "img_hover"=> "photos/hMgPdp99rw77Kfo8QzKkFS32LuF2MZX0zzWLP9rN.png",
                        
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
                        
                        "img_static"=> "photos/sKwecwaKqbA9O0ZdNIz8EOCGUucnPZppseSpIgBP.png",
                        
                        "img_hover"=> "photos/AZbaSILRfbRYuhs2zmpnsLxdyUK7LSP4cDgEg02M.png",
                        
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
