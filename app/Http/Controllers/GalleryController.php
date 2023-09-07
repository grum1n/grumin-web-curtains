<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Page;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Gallery::orderBy('id', 'desc')->paginate(9);
        $pages = Page::all();
        return view('authorized.gallery.index', compact('images', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = Page::all();
        return view('authorized.gallery.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $request->validated();

        if($request->hasFile('cover')){
            $file = $request->file('cover');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('images/gallery/'), $imageName);

            Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'cover' =>  $imageName,
                'status' => $request->status,
                'user' => $request->user,
                'page_id' => $request->page_id,
            ]);
        } else {
           Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'cover' =>  'no image',
                'status' => $request->status,
                'user' => $request->user,
                'page_id' => $request->page_id,
            ]);
        }
        session()->flash('message', $request->title . ' successfully saved');

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $pages = Page::all();
        return view('authorized.gallery.edit', compact('pages', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $request->validated();

        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');
        $gallery->status = $request->input('status');
        $gallery->user = $request->input('user');
        $gallery->page_id = $request->input('page_id');
        $gallery->update();

        session()->flash('message', $request->title . ' successfully updated');

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $itemId = $gallery->id;
        $item = $gallery->title;
        if (File::exists("images/gallery/" . $gallery->cover)) {
            File::delete("images/gallery/" . $gallery->cover);
        }
        if (File::exists("images/thumbnail/" . $gallery->cover)) {
            File::delete("images/thumbnail/" . $gallery->cover);
        }

        $gallery->delete();

        session()->flash('message', $item . ' with id : ' . $itemId . ' successfully deleted');
        
        return redirect()->route('gallery.index');
    }
}
