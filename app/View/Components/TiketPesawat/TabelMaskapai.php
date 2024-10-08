<?php

namespace App\View\Components\TiketPesawat;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabelMaskapai extends Component
{
    /**
     * Create a new component instance.
     */
    public $maskapai;
    public function __construct($maskapai)
    {
        $this->maskapai = $maskapai;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.tiket-pesawat.tabel-maskapai');
    }
}
