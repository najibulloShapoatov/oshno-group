<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
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
        
        return view('admin.news.index', [
            'news'=>News::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "title" => "required"
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


        News::create($validated);

        return redirect("/admin/news");
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.news.edit', [
            'news'=>News::findOrFail($id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
      
        $news = News::findOrFail($id);

        
        $validated = $this->validate($request, [
            "title" => "required"
        ]);
        $news->title = $validated['title'];
        
        $path =public_path('uploads' );
        if ($file = $request->file('image')) {
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $myfile = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . uniqid() . '.' . $extension;
            $myfile->move($path, $fileName);
            $news->image =$fileName;
        }
        $news->description = $this->saveSummernote($request->description);
        $news->is_active =($request->input('is_active')=='on')?true:false;


  
        $news->update();

        return redirect('/admin/news');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $news = News::findOrFail($id);
        if($news){
            if($news->image){
                if(file_exists(public_path('uploads/').$news->image)){
                    unlink(public_path('uploads/').$news->image);
                }
            }
            $news->delete();
        }

        return back()->with('message', 'item deleted successfully');
    }

   /* public function saveSummernote($description){

        $description = htmlspecialchars(trim($description));
        if($description){

            $dom = new \DomDocument();
      
            $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
      
            $images = $dom->getElementsByTagName('img');
      
            foreach($images as $k => $img){
      
      
                $data = $img->getAttribute('src');
      
                list($type, $data) = explode(';', $data);
      
                list(, $data)      = explode(',', $data);
      
                $data = base64_decode($data);
      
                $image_name= time().$k.'.png';
      
                $path1 = public_path('uploads\\' ) . $image_name;
                //$path = '/public/uploads/' . $image_name;
      
                file_put_contents($path1, $data);
      
                $img->removeAttribute('src');
      
                $img->setAttribute('src', '/public/uploads/'.$image_name);
      
             }
      
      
            $description = $dom->saveHTML();
            return $description;
        }
        return '';
    } */
}
