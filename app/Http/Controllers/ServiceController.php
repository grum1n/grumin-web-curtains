<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('authorized.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authorized.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $request->validated();

        if($request->hasFile('cover')){
            $file = $request->file('cover');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('images/gallery/'), $imageName);

            Service::create([
                'section_desc' => $request->section_desc,
                'section_heading' => $request->section_heading,
                'body' => $request->body,
                'article_heading' => $request->article_heading,
                'article_body' => $request->article_body,
                'author' => $request->author,
                'cover' =>  $imageName,
                'user' => $request->user,
            ]);
        } else {
            Service::create([
                'section_desc' => $request->section_desc,
                'section_heading' => $request->section_heading,
                'body' => $request->body,
                'article_heading' => $request->article_heading,
                'article_body' => $request->article_body,
                'author' => $request->author,
                'cover' =>  'no image',
                'user' => $request->user,
            ]);
        }
        session()->flash('message', $request->section_desc . ' successfully saved');

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('authorized.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $request->validated();

        $service->update([
            'section_desc' => $request->input('section_desc'),
            'section_heading' => $request->input('section_heading'),
            'body' => $request->input('body'),
            'article_heading' => $request->input('article_heading'),
            'article_body' => $request->input('article_body'),
            'author' => $request->input('author'),
            'user' => $request->input('user'),
            'cover' => 'just test',
        ]);

        session()->flash('message',  'Services info with id : ' . $service->id . ' successfully updated');

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $itemId = $service->id;
        if (File::exists("images/gallery/" . $service->cover)) {
            File::delete("images/gallery/" . $service->cover);
        }

        $service->delete();

        session()->flash('message', 'Services info with id : ' .$itemId . ' successfully deleted');
        
        return redirect()->route('about.index');
    }
}
