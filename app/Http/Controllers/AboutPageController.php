<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Http\Requests\StoreAboutPageRequest;
use App\Http\Requests\UpdateAboutPageRequest;
use Illuminate\Support\Facades\File;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutPages = AboutPage::all();
        return view('authorized.about.index', compact('aboutPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authorized.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutPageRequest $request)
    {
        $request->validated();

        if($request->hasFile('cover')){
            $file = $request->file('cover');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('images/gallery/'), $imageName);

            AboutPage::create([
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
            AboutPage::create([
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

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutPage $aboutPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutPage $about)
    {
        return view('authorized.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutPageRequest $request, AboutPage $about)
    {
        $request->validated();

        $about->update([
            'section_desc' => $request->input('section_desc'),
            'section_heading' => $request->input('section_heading'),
            'body' => $request->input('body'),
            'article_heading' => $request->input('article_heading'),
            'article_body' => $request->input('article_body'),
            'author' => $request->input('author'),
            'user' => $request->input('user'),
            'cover' => 'just test',
        ]);

        session()->flash('message',  'About info with id : ' . $about->id . ' successfully updated');

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutPage $about)
    {
        $itemId = $about->id;
        if (File::exists("images/gallery/" . $about->cover)) {
            File::delete("images/gallery/" . $about->cover);
        }
        if (File::exists("images/thumbnail/" . $about->cover)) {
            File::delete("images/thumbnail/" . $about->cover);
        }

        $about->delete();

        session()->flash('message', 'About info with id : ' .$itemId . ' successfully deleted');
        
        return redirect()->route('about.index');
    }
}
