<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\Hosting;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use App\Models\Enums\OrderType;
use App\Models\SlideShow;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Helpers\Utils;

class IndexController extends Controller
{
    public function get(){

        return view("web.index",[
            'news'=>News::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get(),
        ]);
    }

    public function coorporativeClients(){
        return view('web.coorparativeClients');
    }

    public function registerDomains(){
        return view('web.registerDomains');
    }
    public function ipAddress(){
        return view('web.ipAddress');
    }
    public function hostings(){
        return view('web.hostings',[
            'data'=>Hosting::where(['is_active'=>1])->orderBy('created_at','desc')->get(),
        ]);
    }
    public function domains(){
        return view('web.domains',[
            'data'=>Domain::where(['is_active'=>1])->orderBy('created_at','desc')->get(),
        ]);
    }
    public function callMaster(){
        return view('web.callMaster');
    }

    public function bringFriend(){
        return view('web.bringFriend');
    }

    public function aboutUs(){
        return view('web.aboutUs');
    }

    public function partners(){
        return view('web.partners');
    }
    public function vacancies(){
        return view('web.vacancies',[
            'data'=> Vacancy::orderBy('created_at', 'desc')->paginate(15),
        ]);
    }

    public function detailVacancies($id){
        return view('web.detailVacancies',[
            'data'=> Vacancy::findOrFail($id),
        ]);
    }

    public function detailSlide($id){
        return view('web.detailSlide',[
            'data'=> SlideShow::findOrFail($id),
        ]);
    }
    public function contacts(){
        return view('web.contacts');
    }

    public function order(Request $request){
        $order = new Order();
        $order->description  = $request->input('form');
        $order->fullname  = $request->input('name');
        $order->phone  = $request->input('phone');
        $order->order_type  = $request->input('type');


        $order->product_id = $request->input('id');
    
         
        if ($order->product_id && $order->product_id >0) {
            $order->description = $order->description."\r\n".$this->generateProductHTML($order->product_id);
        }
        $order->save();



        
        
        //dd($order);
        Utils::sentMail(env('MAILADDRESS', 'google@gmail.com' ), OrderType::getText($order->order_type), $order->description);
        return back(); 
    }



    public function generateProductHTML($id){

        $product = Product::findOrFail($id);
        //dd($product->image);
        if($product){

            $img="";

            if($product->image && file_exists(public_path('uploads/').$product->image))
                $img = '<div style="margin-bottom:15px" class="mt-4">'.
                            '<label >Картинка</label>'.
                            '<img style="width:90%;" src="'.env('URI','http://oshno.tj').public_path('uploads/').$product->image.'" >'.
                        '</div> ';


            return '<div class=" col-lg-6 mt-4">'.
                '<div class="bring-friend-form">'.
                    '<h3>Данные Продукта</h3>'.
                    '<div class="mt-4">'.
                        '<label >Названия</label>'.
                        '<input style="width:90%; margin-bottom:15px" readonly type="text" value="'.$product->title.'" >'.
                    '</div> '.
                     '<div class="mt-4">'.
                        '<label >Цена</label>'.
                        '<input style="width:90%; margin-bottom:15px" readonly type="text" value="'.$product->price.' TJS" >'.
                    '</div> '.
                     $img.
                     '<div class="mt-4">'.
                        '<label >Скорость</label>'.
                        '<input style="width:90%; margin-bottom:15px" readonly type="text" value="'.$product->speed.' Мбит\сек" >'.
                    '</div> '.
                     '<div class="mt-4">'.
                        '<label  >Трафик</label>'.
                        '<input style="width:90%; margin-bottom:15px" readonly type="text" value="'.$product->traffic.'" >'.
                    '</div> '.
                     '<div class="mt-4">'.
                        '<label >Подключения бесплатно </label>'.
                        '<input style="width:90%; margin-bottom:15px" readonly type="text" value="'.$product->is_connect_free.'" >'.
                    '</div> '.
                '</div>'.
            '</div>';
        }
        return '';

    }

}
