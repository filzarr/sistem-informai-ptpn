<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class text extends Component
{
    /**
     * Create a new component instance.
     */
    public $name,$formname,$placeholder,$messageerror,$label,$value;
    public function __construct($name, $formname, $placeholder, $messageerror, $label, $value)
    {
        $this->name = $name;
        $this->formname = $formname;
        $this->placeholder = $placeholder;
        $this->messageerror = $messageerror;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.text');
    }
}
