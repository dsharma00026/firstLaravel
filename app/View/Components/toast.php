<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class toast extends Component
{

    //here we get value from main view and initilize so than we use in component view
    public $msg;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($msg,$class)
    {
        $this->msg=$msg;
        $this->class=$class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toast');
    }
}
