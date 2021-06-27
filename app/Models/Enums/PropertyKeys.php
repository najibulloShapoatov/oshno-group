<?php

namespace App\Models\Enums;

use App\Models\Property;

class PropertyKeys 
{
    public static string $LOGO = "logo";
    public static string $TITLE = "title";
    public static string $TITLE_SECOND = "title-second";
    public static string $ADDRESS = "address";
    public static string $LICENCE = "license";
    public static string $CALL_MASTER_TEXT = "call-master-text";
    public static string $WHO_US = "who-us";
    public static string $CONTACTS_TEXT = "contacts-text";
    public static string $PHONE = "phone";
    public static string $PHONE_TWO = "phone-two";
    public static string $PHONE_THREE = "phone-three";
    public static string $BRING_FRIEND= "bring-friend";

   


    public static function getValue($key){
        $e = Property::where('key', $key)->get()->first();
        if ($e && $e->value)
            return $e->value;
        return "...";
    }
}
