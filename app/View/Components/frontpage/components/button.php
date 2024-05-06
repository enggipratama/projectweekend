<?php

namespace App\View\Components\frontpage\components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{

    public $bgcolor;
    public $textcolor;
    public $rounded;

    public function __construct($bgcolor = 'bg-base', $rounded = 'rounded-lg', $textcolor = 'text-base')
    {
        $this->bgcolor = $bgcolor;
        $this->textcolor = $textcolor;
        $this->rounded = $rounded;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontpage.components.button');
    }
}
