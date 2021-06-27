<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        return view('admin.property');
    }

    public function update(Request $request){
        $key = $request->input('key');
        if($request->input('type') == 's')
            $value = $this->saveSummernote($request->input('value'));
        else
        $value = $request->input('value');
        

        $prop = Property::where('key', $key)->get()->first();
        //dd($prop);
        if ($prop) {
            $prop->value = $value;
            $prop->update();
            return back();
        }
        $prop = new Property();
        $prop->key=$key;
        $prop->value=$value;
        $prop->save();
        return back();
    }
}
