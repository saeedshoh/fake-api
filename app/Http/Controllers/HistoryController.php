<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
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
                "monthly_expense" : [
                    {
                        "income" : 12.0,
                        "expense" : 10.0,
                        "day" : "01"
                    },
                    {
                        "income" : 45.0,
                        "expense" : 10.0,
                        "day" : "02"
                    },
                    {
                        "income" : 8.0,
                        "expense" : 50.0,
                        "day" : "03"
                    },
                    {
                        "income" : 80.0,
                        "expense" : 50.0,
                        "day" : "04"
                    },
                    {
                        "income" : 23.0,
                        "expense" : 50.0,
                        "day" : "05"
                    }
                ],
                "diagramm" : {
                    "categories" : [
                        {
                            "id" : 1,
                            "title":"Звонки",
                            "color":"#B719DE",
                            "expense": 14.4
                        },
                        {
                            "id" : 2,
                            "title":"Абонентская плата",
                            "color":"#E10897",
                            "expense": 140.4
                        },
                        {
                            "id" : 3,
                            "title":"Интернет",
                            "color":"#B719DE",
                            "expense": 145.4
                        },
                        {
                            "id" : 4,
                            "title":"SMS ",
                            "color":"#B719DE",
                            "expense": 104.4
                        },
                        {
                            "id" : 5,
                            "title":"Другое",
                            "color":"#B719DE",
                            "expense": 4.4
                        }
                    ]
                },
                "history" : [
                    {
                        "id": 1,
                        "icon":"storage/icons/service-icon.png",
                        "title":"Интернет",
                        "date_time":"YYYY-MM-dd hh:mm:ss",
                        "expense":-0.6,
                        "expense_type":1,
                        "amount": 180,
                        "volume" : 12.27
                    },
                    {
                        "id": 2,
                        "icon":"storage/icons/outgoing-call.png",
                        "title":"Исходящий на Babilon-M",
                        "date_time":"25.02.2022 09:39:06",
                        "expense":-0.6,
                        "expense_type":0,
                        "amount": 180,
                        "volume" : 128
                    },
                    {
                        "id": 3,
                        "icon":"storage/icons/outgoing-call.png",
                        "title":"Исходящий на Babilon-M",
                        "date_time":"25.02.2022 09:39:06",
                        "expense":-20.5,
                        "expense_type":0,
                        "amount": 180,
                        "volume" : 128
                    },
                    {
                        "id": 4,
                        "icon":"storage/icons/service-icon.png",
                        "title":"Интернет",
                        "date_time":"YYYY-MM-dd hh:mm:ss",
                        "expense":-16.6,
                        "expense_type":1,
                        "amount": 180,
                        "volume" : 12.6
                    }
                ]
            }
        }');


        return response()->json($json);
    }
}
