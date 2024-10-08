<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelMaskapai;

class ModelHargaTiket extends Model
{
    use HasFactory;
    protected $table = 'harga_tiket';
    protected $primaryKey  =  'id_harga';
    protected $fillable = [
        'id_harga',
        'id_maskapai',
        'harga_low',
        'harga_top',
        'lokasi_transit'
    ];
    public $timestamps = true;

    public function maskapai()
    {
        return $this->belongsTo(ModelMaskapai::class, 'id_maskapai');
    }
}
