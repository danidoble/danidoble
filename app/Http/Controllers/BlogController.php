<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dash.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required'],
            'preview_content'=>['required'],
            'preview_image'=>['required','image','max:2048'],
            'content'=>['required'],
            'status'=>['required'],
            'comment'=>['required'],
            //'slug'=>['required'],
            'tags'=>['required'],
        ]);


        if($request->hasFile('preview_image')){
            $extension = $request->file('preview_image')->getClientOriginalExtension();
            $name = sha1(microtime()) . "." . $extension;
            $folder = 'preview/';

            $request->preview_image->storeAs('/public/', $folder.$name);
            $url = Storage::url($folder.$name);

            $image = new Image();
            $image->url = $url;
            $image->type = 'image';
            $image->save();
        }


        $entry=new Blog();
        $entry->user_id = Auth::user()->getAuthIdentifier();
        $entry->name = $request->input('name');
        $entry->preview_content = $request->input('preview_content');
        $entry->preview_image = config('app.url').$url;
        $entry->content = $request->input('content');
        $entry->status = $request->input('status');
        $entry->comment = $request->input('comment');
        $entry->slug = Str::slug($request->input('name').' '.Str::random(6));
        $entry->tags = $request->input('tags');
        $entry->save();

        return redirect()->route('dash.blog.create')->with([
            'status_ok'=>true,
            'url_entry'=> route('blog.show.slug',['date'=>date('Y-m-d',strtotime($entry->created_at)),'slug'=>$entry->slug]),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $date
     * @param $slug
     * @return Response
     */
    public function show(Request $request,$date,$slug)
    {
        $entry = Blog::where('created_at','LIKE',$date.'%')
            ->where('slug',$slug)->firstOrFail();
        return view('blog.show',[
            'entry'=>$entry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Blog $blog
     * @return Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
