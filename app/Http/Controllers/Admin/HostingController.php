<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use Illuminate\Http\Request;

class HostingController extends Controller
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
   return view('admin.hosting.index', [
       'data'=>Hosting::orderBy('created_at', 'desc')->get(),
   ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
   return view('admin.hosting.create');
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
        "type_id" => "required",
        "title" => "required",
        "disk_space" => "required",
        "price" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;


    Hosting::create($validated);
    return redirect('/admin/hostings');
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    return view('admin.hosting.edit', [
        'data'=>Hosting::findOrFail($id)
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
    $data  = Hosting::findOrFail($id);
  
    $validated = $this->validate($request, [
        "type_id" => "required",
        "title" => "required",
        "disk_space" => "required",
        "price" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;
    
    $data->type_id = $validated['type_id'];
    $data->title = $validated['title'];
    $data->disk_space = $validated['disk_space'];
    $data->price = $validated['price'];
    $data->is_active = $validated['is_active'];

    $data->update();


    return redirect('/admin/hostings');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $data = Hosting::findOrFail($id);

    $data->delete();
    

    return back()->with('message', 'item deleted successfully');
}
}
