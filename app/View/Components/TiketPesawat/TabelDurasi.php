<?php

namespace App\View\Components\TiketPesawat;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabelDurasi extends Component
{
    /**
     * Create a new component instance.
     */
    public $durasi;
    public function __construct($durasi)
    {
        //
        $this->durasi = $durasi;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tiket-pesawat.tabel-durasi');
    }
}
