<?php

namespace App\View\Components\Frontend;

use App\Models\Contact;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
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
        return view('components.frontend.footer', compact('contacts'));
    }
}
