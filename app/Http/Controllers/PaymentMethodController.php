<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMethodController extends Controller
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
                "payment_method": [
                    {
                        "id" : 13,
                        "type":"wallet",
                        "icon" : "image/url",
                        "title": "Кошелек Tcell",
                        "card_number" : "4444 8888 1234 5678",
                        "balance" : 150.0
                    },
                    {
                        "id" : 13,
                        "type":"card",
                        "icon" : "image/url",
                        "title": "Кошелек Tcell",
                        "card_number" : "4444 8888 1234 5678",
                        "balance" : 0.0
                    }
                ]
            }
        }');


        return response()->json($json);
    }
}
