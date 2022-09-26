<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class Countdown extends Component
{
    public $date;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($date, $month, $year)
    {
        $this->date = Carbon::create($year, $month, $date, 16, 00, 00)->format('M d, Y H:i:s');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.countdown');
    }
}
