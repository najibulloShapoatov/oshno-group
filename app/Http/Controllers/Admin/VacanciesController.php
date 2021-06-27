<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacanciesController extends Controller
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
   return view('admin.vacancies.index', [
       'data'=>Vacancy::orderBy('created_at', 'desc')->get(),
   ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
   return view('admin.vacancies.create');
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
        "short_description" => "required",
        "description" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;


    Vacancy::create($validated);
    return redirect('/admin/vacancies');
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    return view('admin.vacancies.edit', [
        'data'=>Vacancy::findOrFail($id)
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
    $data  = Vacancy::findOrFail($id);
    $validated = $this->validate($request, [
        "title" => "required",
        "short_description" => "required",
        "description" => "required",
    ]);
    $validated['is_active'] =($request->input('is_active')=='on')?true:false;
    
    $data->title = $validated['title'];
    $data->short_description = $validated['short_description'];
    $data->description = $validated['description'];
    $data->is_active = $validated['is_active'];

    $data->update();


    return redirect('/admin/vacancies');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $data = Vacancy::findOrFail($id);

    $data->delete();
    

    return back()->with('message', 'item deleted successfully');
}
}
