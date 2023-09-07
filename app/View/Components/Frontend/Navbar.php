<?php

namespace App\View\Components\Frontend;

use App\Models\Contact;
use App\Models\Page;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $contacts = Contact::orderby('created_at', 'desc')->first();
        // $pages = Page::where('content_layout_name', '=', 'services')->get();

        return view('components.frontend.navbar', compact('contacts'));
    }
}
