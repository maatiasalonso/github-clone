<?php

namespace App\View\Components\layouts\navbars;

use Illuminate\View\Component;

class repo-nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.navbars.repo-nav');
    }
}
