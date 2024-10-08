<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMaskapai extends Model
{
    use HasFactory;
    protected $table = 'maskapai';
    protected $primaryKey  =  'id_maskapai';
    protected $fillable = [
        'id_maskapai',
        'nama_maskapai',
        'kelas_kursi',
        'deskripsi_maskapai',
        'url_foto',
    ];
    public $timestamps = true;
}
