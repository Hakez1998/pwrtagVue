<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InfoBanner extends Component
{
    public $title, $subtitle, $whiteTemplate, $iconType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle, $whiteTemplate, $iconType)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->whiteTemplate = $whiteTemplate;
        $this->iconType = $iconType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.info-banner');
    }
}
