<?php

namespace App\View\Components\TiketPesawat;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabelHargaTiket extends Component
{
    /**
     * Create a new component instance.
     */
    public $hargaTiket, $usdToIdr;
    public function __construct($hargaTiket, $usdToIdr)
    {
        //
        $this->hargaTiket = $hargaTiket;
        $this->usdToIdr = $usdToIdr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.tiket-pesawat.tabel-harga-tiket');
    }
}
