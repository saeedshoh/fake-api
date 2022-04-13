<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
            "status": "success",
            "message": "",
            "response": {
              "subs_info": {
                "account_status": 1,
                "account_status_text": "\u0418\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d",
                "user_img": "https://tojweb.tj/api/wallet/img/users/1.png",
                "user_name": "Mahmadsaidsho",
                "phone": "934737318"
              },
              "wallet_info": { "balance": 150.47, "currency": "\u0441\u043c\u043d" },
              "notification": { "status": 1, "count": 3 },
              "menu": [
                {
                  "id": 1,
                  "icon": "https://tojweb.tj/api/wallet/img/menu/1.png",
                  "title": "\u0413\u043b\u0430\u0432\u043d\u0430\u044f",
                  "priority": 1,
                  "type": 1,
                  "url": "home"
                },
                {
                  "id": 2,
                  "icon": "https://tojweb.tj/api/wallet/img/menu/2.png",
                  "title": "\u041f\u0435\u0440\u0435\u0432\u0435\u0441\u0442\u0438",
                  "priority": 2,
                  "type": 1,
                  "url": "services"
                },
                {
                  "id": 3,
                  "icon": "https://tojweb.tj/api/wallet/img/menu/3.png",
                  "title": "\u041e \u043a\u043e\u0448\u0435\u043b\u044c\u043a\u0435",
                  "priority": 3,
                  "type": 2,
                  "url": "https://google.com"
                },
                {
                  "id": 4,
                  "icon": "https://tojweb.tj/api/wallet/img/menu/4.png",
                  "title": "\u0412\u044b\u0445\u043e\u0434",
                  "priority": 4,
                  "type": 1,
                  "url": "logout"
                }
              ],
              "top_services": [
                {
                  "serv_id": 1,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/1.png",
                  "title": "\u041c\u0430\u0433\u0430\u0437\u0438\u043d\u044b, \u0441\u0435\u0440\u0432\u0438\u0441\u044b",
                  "priority": 1
                },
                {
                  "serv_id": 2,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/2.png",
                  "title": "\u0423\u0447\u0435\u0431\u0430",
                  "priority": 2
                },
                {
                  "serv_id": 3,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/3.png",
                  "title": "\u0422\u0443\u0440\u044b, \u0431\u0438\u043b\u0435\u0442\u044b",
                  "priority": 3
                },
                {
                  "serv_id": 4,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/4.png",
                  "title": "\u041e\u0431\u044a\u044f\u0432\u043b\u0435\u043d\u0438\u044f",
                  "priority": 3
                },
                {
                  "serv_id": 5,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/5.png",
                  "title": "\u0410\u0432\u0438\u0430\u0431\u0438\u043b\u0435\u0442\u044b",
                  "priority": 5
                },
                {
                  "serv_id": 6,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/6.png",
                  "title": "\u0420\u0435\u0441\u0442\u043e\u0440\u0430\u043d\u044b",
                  "priority": 6
                },
                {
                  "serv_id": 7,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/7.png",
                  "title": "\u041a\u0438\u043d\u043e",
                  "priority": 7
                },
                {
                  "serv_id": 8,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/8.png",
                  "title": "\u0421\u0432\u0435\u0442, \u0412\u043e\u0434\u0430",
                  "priority": 8
                },
                {
                  "serv_id": 9,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/9.png",
                  "title": "\u0413\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u0441\u0432\u044f\u0437\u044c, NGN",
                  "priority": 9
                },
                {
                  "serv_id": 10,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/10.png",
                  "title": "\u041c\u043e\u0431\u0438\u043b\u044c\u043d\u0430\u044f \u0441\u0432\u044f\u0437\u044c",
                  "priority": 10
                },
                {
                  "serv_id": 11,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/11.png",
                  "title": "\u042d\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u044b\u0439 \u043a\u043e\u0448\u0435\u043b\u044c\u043a\u0438",
                  "priority": 11
                },
                {
                  "serv_id": 12,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/12.png",
                  "title": "\u041a\u043e\u043c\u0443\u043d\u0430\u043b\u044c\u043d\u044b\u0435 \u0443\u0441\u043b\u0443\u0433\u0438",
                  "priority": 12
                },
                {
                  "serv_id": 13,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/13.png",
                  "title": "\u0418\u043d\u0442\u0435\u0440\u043d\u0435\u0442 \u043f\u0440\u043e\u0432\u0430\u0439\u0434\u0435\u0440\u044b",
                  "priority": 13
                },
                {
                  "serv_id": 14,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/14.png",
                  "title": "\u041f\u043e\u0433\u0430\u0448\u0435\u043d\u0438\u0435 \u0437\u0430\u0439\u043c\u043e\u0432",
                  "priority": 14
                },
                {
                  "serv_id": 15,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/15.png",
                  "title": "\u0422\u0435\u043b\u0435\u0432\u0438\u0434\u0435\u043d\u0438\u0435",
                  "priority": 15
                },
                {
                  "serv_id": 16,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/16.png",
                  "title": "\u0422\u0430\u043a\u0441\u0438",
                  "priority": 16
                },
                {
                  "serv_id": 17,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/17.png",
                  "title": "\u0424\u043e\u043d\u0434\u044b, \u043f\u043e\u043c\u043e\u0449\u044c",
                  "priority": 17
                },
                {
                  "serv_id": 18,
                  "serv_img": "https://tojweb.tj/api/wallet/img/service/18.png",
                  "title": "\u0417\u0430\u0440\u0443\u0431\u0435\u0436\u043d\u044b\u0435 \u043e\u043f\u0435\u0440\u0430\u0442\u043e\u0440\u044b",
                  "priority": 18
                }
              ],
              "sliders": [
                {
                  "id": 1,
                  "img": "https://tojweb.tj/api/wallet/img/sliders/1.png",
                  "priority": 1,
                  "type": 2,
                  "url": "https://www.mail.ru"
                },
                {
                  "id": 2,
                  "img": "https://tojweb.tj/api/wallet/img/menu/2.png",
                  "priority": 2,
                  "type": 2,
                  "url": "https://www.ya.ru"
                },
                {
                  "id": 3,
                  "img": "https://tojweb.tj/api/wallet/img/menu/3.png",
                  "priority": 3,
                  "type": 1,
                  "url": "history"
                }
              ]
            }
          }');


        return response()->json($json);
    }
}
