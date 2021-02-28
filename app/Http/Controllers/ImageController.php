<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>['sometimes','image','max:2048'],
            'file'=>['sometimes','file','max:2048'],
        ]);

        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $name = sha1(microtime()) . "." . $extension;
            $folder = 'editor/';


            $request->image->storeAs('/public/', $folder.$name);
            $url = Storage::url($folder.$name);

            $image = new Image();
            $image->url = $url;
            $image->type = 'image';
            $image->save();
        }
        elseif($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $name = sha1(microtime()) . "." . $extension;
            $folder = 'editor/files/';
            $request->file->storeAs('/public/', $folder.$name);
            $url = Storage::url($folder.$name);
            $image = new Image();
            $image->url = $url;
            $image->type = 'file';
            $image->save();
        }
        else{
            return response()->json(['error'=>true]);
        }

        // Generate response.
        $response = (object)[];
        $response->link = config('app.url').$url;
        return response()->json($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
