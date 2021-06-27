<?php

namespace App\Models\Enums;


class OrderType
{
    public static string $CONNECT = "connect";
    public static string $PRODUCT = "product";
    public static string $CORPORATIVE = "corporative";
    public static string $DOMAIN_REGISTER = "domain-register";
    public static string $IP_ADDRESS = "ip-address";
    public static string $BRING_FRIEND= "bring-friend";


      


    public static function getText($s){
        $text = [
            OrderType::$CONNECT=>'Подключения',
            OrderType::$PRODUCT=>'Продукт',
            OrderType::$CORPORATIVE=>'Корпаративный клиаент',
            OrderType::$DOMAIN_REGISTER=>'Регистрация домена',
            OrderType::$IP_ADDRESS=>'IP Адресс',
            OrderType::$BRING_FRIEND=>'Привести друга',
        ];
       return isset($text[$s])? $text[$s]:"Заказ";
    }
}
