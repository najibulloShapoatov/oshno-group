<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
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
   return view('admin.domains.index', [
       'data'=>Domain::orderBy('created_at', 'desc')->get(),
   ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
   return view('admin.domains.create');
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
        "registration_price" => "required",
        "renewal_price" => "required",
        "transfer_price" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;


    Domain::create($validated);
    return redirect('/admin/domains');
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    return view('admin.domains.edit', [
        'data'=>Domain::findOrFail($id)
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
    $data  = Domain::findOrFail($id);
    $validated = $this->validate($request, [
        "title" => "required",
        "registration_price" => "required",
        "renewal_price" => "required",
        "transfer_price" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;
    
    
    $data->title = $validated['title'];
    $data->registration_price = $validated['registration_price'];
    $data->renewal_price = $validated['renewal_price'];
    $data->transfer_price = $validated['transfer_price'];
    $data->is_active = $validated['is_active'];

    $data->update();


    return redirect('/admin/domains');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $data = Domain::findOrFail($id);

    $data->delete();
    

    return back()->with('message', 'item deleted successfully');
}
}
