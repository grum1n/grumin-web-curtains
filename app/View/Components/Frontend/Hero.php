<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public $sliders;
    public $servicesPages;
    public function __construct($sliders, $servicesPages)
    {
       $this->sliders = $sliders;
       $this->servicesPages = $servicesPages;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.hero');
    }
}
