<?php

namespace App\View\Components\Frontend;

use App\Models\Contact;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLogo extends Component
{
    /**
     * Create a new component instance.
     */
    public $contacts;
    public function __construct($contacts)
    {
        return $this->contacts = $contacts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.frontend.app-logo');
    }
}
