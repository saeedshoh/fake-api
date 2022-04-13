<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Js;

class ServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $json = json_decode('{
            "status" : "Success",
            "message" : "",
            "response" : {
                "services" :[
                    {
                        "id":1,
                        "icon":"storage/icons/wallet.png",
                        "title":"Мобильная связь"
                    },
                    {
                        "id":2,
                        "icon":"storage/icons/wallet.png",
                        "title":"Электронный кошельки"
                    },
                    {
                        "id":3,
                        "icon":"storage/icons/wallet.png",
                        "title":"Комунальные услуги"
                    },
                    {
                        "id":4,
                        "icon":"storage/icons/wallet.png",
                        "title":"Интернет провайдеры"
                    },
                    {
                        "id":5,
                        "icon":"storage/icons/wallet.png",
                        "title":"Погашение займов"
                    },
                    {
                        "id":6,
                        "icon":"storage/icons/wallet.png",
                        "title":"Телевидение"
                    },
                    {
                        "id":7,
                        "icon":"storage/icons/wallet.png",
                        "title":"Такси"
                    },
                    {
                        "id":8,
                        "icon":"storage/icons/wallet.png",
                        "title":"Объявления"
                    },
                    {
                        "id":9,
                        "icon":"storage/icons/wallet.png",
                        "title":"Фонды, помощь"
                    },
                    {
                        "id":10,
                        "icon":"storage/icons/wallet.png",
                        "title":"Зарубежные операторы"
                    },
                    {
                        "id":11,
                        "icon":"storage/icons/wallet.png",
                        "title":"Городская связь, NGN"
                    },
                    {
                        "id":12,
                        "icon":"storage/icons/wallet.png",
                        "title":"Магазины, сервисы"
                    },
                    {
                        "id":13,
                        "icon":"storage/icons/wallet.png",
                        "title":"Учеба"
                    },
                    {
                        "id":14,
                        "icon":"storage/icons/wallet.png",
                        "title":"Туры, билеты"
                    }
                ]
            }
        }');


        return response()->json($json);
    }
}
