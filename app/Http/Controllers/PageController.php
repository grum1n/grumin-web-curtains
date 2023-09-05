<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'ASC')->get();
        return view('authorized.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authorized.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $request->validated();

        Page::create([
            'name' => $request->input('name'),
            'content_layout_name' => $request->input('content_layout_name'),
        ]);

        return redirect()->route('pages.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('authorized.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $request->validated();

        $page->update([
            'name' => $request->input('name'),
            'content_layout_name' => $request->input('content_layout_name'),
        ]);

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        
        return redirect()->route('pages.index');
    }
}
