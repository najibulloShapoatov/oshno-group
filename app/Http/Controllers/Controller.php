<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DOMDocument;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveSummernote($description){

        if($description){
            $path = public_path('uploads/');
            if (!is_dir($path)) {mkdir($path, 0777, true); }
        $dom = new DomDocument();
        $dom->loadHtml(mb_convert_encoding($description, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR | LIBXML_SCHEMA_CREATE);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            if( mb_substr($data, 0, 4) != 'http' && mb_substr($data, 0, 7) != "/public") {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = time() . $k . '.png';
                $pathf = $path  . $image_name;
                file_put_contents($pathf, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', '/public/uploads/' . $image_name);
            }
        }
        $description = $dom->saveHTML();
        return $description;
        }
        return '';
    }
}
