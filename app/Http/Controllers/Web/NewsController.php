<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function get(){
        return view('web.news.index',[
            'news'=>News::where('is_active',1)->orderBy('created_at', 'desc')->paginate(15),
        ]);
    }


   public function getById($id){
    $news = News::findOrFail($id);
    
       return view('web.news.detail', [
        'news'=>$news,
       ]);
   }
}
