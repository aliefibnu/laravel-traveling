<?php

namespace App\View\Components\BeliTiket;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInfoPribadi extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public function __construct($id)
    {
        //
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.beli-tiket.form-info-pribadi');
    }
}
