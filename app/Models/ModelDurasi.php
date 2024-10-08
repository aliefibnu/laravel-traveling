<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelMaskapai;

class ModelDurasi extends Model
{
    use HasFactory;
    protected $table = 'durasi';
    protected $primaryKey  =  'id_durasi';
    protected $fillable = [
        'id_dudrasi',
        'id_maskapai',
        'paling_cepat',
        'kisaran_normal'
    ];
    public $timestamps = true;

    public function maskapai()
    {
        return $this->belongsTo(ModelMaskapai::class, 'id_maskapai');
    }
}
