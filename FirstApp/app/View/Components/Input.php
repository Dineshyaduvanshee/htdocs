<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
   public $type;
   public $label;
   public $name;
   public $demo;
    public function __construct($type,$name,$label,$demo=0)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label; 
        $this->demo = $demo;
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
