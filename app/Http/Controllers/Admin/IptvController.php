<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Enums\ProductType;

class IptvController extends Controller
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
       return view('admin.iptv.index', [
           'data'=>Product::where('type', ProductType::$IPPHONE)->get(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.iptv.create');
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
        $validated['type'] = ProductType::$IPPHONE;


        Product::create($validated);
        return redirect('/admin/product-iptv');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.iptv.edit', [
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

        $data->update();


        return redirect('/admin/product-iptv');
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

        $data->delete();
        

        return back()->with('message', 'item deleted successfully');
    }
}
