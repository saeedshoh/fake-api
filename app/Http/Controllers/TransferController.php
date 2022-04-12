<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
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
                "banner" : {
                    "image":"images/ibanner.jpg",
                    "action" : "app://tcellhome.tj/transfer/1"
                },
                "transfer_methods": [
                    {
                        "id" :1,
                        "icon": "icons/wallet.png",
                        "title" : "На карту",
                        "subtitle" : "Корти милли или Visa"
                    },
                    {
                        "id" :2,
                        "icon": "icons/wallet.png",
                        "title" : "На кошелек",
                        "subtitle" : "Tcell Wallet"
                    },
                    {
                        "id" :3,
                        "icon": "icons/wallet.png",
                        "title" : "С России в Таджикистан",
                        "subtitle" : "3% денежные переводы"
                    },
                    {
                        "id" :4,
                        "icon": "icons/wallet.png",
                        "title" : "Со Сбербанк онлайн",
                        "subtitle" : "Без комисии 0%"
                    },
                    {
                        "id" :5,
                        "icon": "icons/wallet.png",
                        "title" : "С ВТБ онлайн",
                        "subtitle" : "Tcell Wallet"
                    },
                    {
                        "id" :6,
                        "icon": "icons/wallet.png",
                        "title" : "С Альфа банк онлайн",
                        "subtitle" : "3% денежные переводы"
                    }
                ]
            }
        }');


        return response()->json($json);
    }
}
