<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Enums\ProductType;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function getInternet(){
       return view('web.products.internet',[
           'data'=>Product::where(['is_active'=> 1, 'type'=>ProductType::$INTERNET])
           ->orderBy('created_at','desc')->get()
       ]);
   }
   public function getIptv(){
       return view('web.products.iptv',[
           'data'=>Product::where(['is_active'=> 1, 'type'=>ProductType::$IPPHONE])
           ->orderBy('created_at','desc')->get()
       ]);
   }
   public function getDevices(){
       return view('web.products.devices',[
           'data'=>Product::where(['is_active'=> 1, 'type'=>ProductType::$DEVICE])
           ->orderBy('created_at','desc')->get()
       ]);
   }
}
