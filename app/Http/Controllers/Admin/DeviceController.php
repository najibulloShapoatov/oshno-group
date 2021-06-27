<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Enums\ProductType;

class DeviceController extends Controller
{
   

    /**
 * Create a new controller instance.
 *
 * @return void
 */
public function __construct()
{
    $this->middleware('auth');
}

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
   return view('admin.device.index', [
       'data'=>Product::where('type', ProductType::$DEVICE)->get(),
   ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
   return view('admin.device.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $validated = $this->validate($request, [
        "title" => "required",
        "price" => "required",
        "speed" => "required",
        "traffic" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;
    $validated['is_connect_free'] =($request->input('is_connect_free')=='on')?true:false;
    $validated['type'] = ProductType::$DEVICE;
    $path =public_path('uploads' );
    if ($file = $request->file('image')) {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $myfile = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '_' . uniqid() . '.' . $extension;
        $myfile->move($path, $fileName);
        $validated['image'] =$fileName;
    }


    Product::create($validated);
    return redirect('/admin/product-device');
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    return view('admin.device.edit', [
        'data'=>Product::findOrFail($id)
        ]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $data  = Product::findOrFail($id);
    $validated = $this->validate($request, [
        "title" => "required",
        "price" => "required",
        "speed" => "required",
        "traffic" => "required",
    ]);
    $data->is_active =($request->input('is_active')=='on')?true:false;
    $data->is_connect_free =($request->input('is_connect_free')=='on')?true:false;
    $data->title = $validated['title'];
    $data->price = $validated['price'];
    $data->speed = $validated['speed'];
    $data->traffic = $validated['traffic'];
    $path =public_path('uploads' );
    if ($file = $request->file('image')) {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $myfile = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '_' . uniqid() . '.' . $extension;
        $myfile->move($path, $fileName);
        $data->image =$fileName;
    }

    $data->update();


    return redirect('/admin/product-device');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $data = Product::findOrFail($id);
    if($data->image){
        if(file_exists(public_path('uploads/').$data->image)){
            unlink(public_path('uploads/').$data->image);
        }
    }

    $data->delete();
    

    return back()->with('message', 'item deleted successfully');
}
}
