<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class filter extends Component
{
    /**
     * Create a new component instance.
     */ 
    public function __construct(  
    public array $option,
    public string $name,
    public string $label,
    public string $request,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd($this->request);
        return view('components.form.filter');
    }
}
