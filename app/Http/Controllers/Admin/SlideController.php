<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlideShow;
use Facade\FlareClient\Http\Exceptions\NotFound;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slide.index',[
            'data'=>SlideShow::orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
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
            'subtitle'=>'',
            'image'=>'',
            'image_lg'=>'',
            'image_sm'=>'',
            'link'=>'',
            'location'=>'',
        ]);
        
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

        $validated['description'] = $this->saveSummernote($request->description);
        $validated['is_active'] =($request->input('is_active')=='on')?true:false;

        $validated['location'] ='home';

        SlideShow::create($validated);

        return redirect("/admin/slide");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        throw new NotFound();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.slide.edit',[
            'data'=>SlideShow::findOrFail($id),
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
        $validated = $this->validate($request, [
            "title" => "required",
            'subtitle'=>'',
            'link'=>'',
            'location'=>'',
        ]);

        $data = SlideShow::findOrFail($id);
        
        $path =public_path('uploads' );
        if ($file = $request->file('image')) {
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $myfile = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . uniqid() . '.' . $extension;
            $myfile->move($path, $fileName);
            if($data->image && file_exists(public_path('uploads/').$data->image)){
                    unlink(public_path('uploads/').$data->image);
            }
            $data->image = $fileName;
        }
        
        $data->description = $this->saveSummernote($request->description);
        $data->is_active = ($request->input('is_active')=='on')?true:false;

        $data->title = $validated['title'];
        $data->subtitle = $validated['subtitle'];
        //$data->link = $validated['link'];
        //$data->location = $validated['location'];
        

        
        return redirect("/admin/slide");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $data = SlideShow::findOrFail($id);
        if($data){
            if($data->image){
                if(file_exists(public_path('uploads/').$data->image)){
                    unlink(public_path('uploads/').$data->image);
                }
            }
            $data->delete();
        }

        return back()->with('message', 'item deleted successfully');
    }
}
