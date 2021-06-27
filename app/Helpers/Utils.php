<?php

namespace App\Helpers;

class Utils
{

    public static function  sentMail(string $email, string $subject, string $text){

        $url = "______________";

       $data=[
         'email'=>$email,
         'key'=>"_________________",
         'subject'=>$subject,
         'text'=>$text,
       ];

       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, ($data));
       curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
       return curl_exec($curl);
    }

}
