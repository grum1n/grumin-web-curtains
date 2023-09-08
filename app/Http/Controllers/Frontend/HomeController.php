<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Page;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Gallery::where('page_id', '=','1')->latest()->get();
        $servicesPages = Page::where('content_layout_name', '=', 'services')->latest()->get();
        
        return view('frontend.index', compact('sliders', 'servicesPages'));
    }

    public function singlePage(Page $page)
    {
        $images = Gallery::where('page_id', '=', $page->id)->latest()->get();

        return view('frontend.single', compact('page', 'images'));
    }

    public function about()
    {
        $aboutInfo = AboutPage::all();
        return view('frontend.about', compact('aboutInfo'));
    }

    public function services()
    {
        $contacts = Contact::orderby('created_at', 'desc')->first();
        return view('frontend.services', compact('contacts'));
    }

    public function frontendGallery()
    {
        $images = Gallery::orderBy('id', 'DESC')->paginate(12);
        return view('frontend.gallery', compact('images'));
    }

    public function contact()
    {
        $contacts = Contact::orderby('created_at', 'desc')->first();
        return view('frontend.contact', compact('contacts'));
    } 
}
