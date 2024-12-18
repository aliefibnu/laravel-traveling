<?php

namespace App\Http\Controllers;

use App\Models\ModelDurasi;
use App\Models\ModelHargaTiket;
use App\Models\ModelMaskapai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function tiket_pesawat()
    {
        $headerText = "Lihat Maskapai Tersedia";
        $maskapai = ModelMaskapai::all();
        $page = 'maskapai';
        return view('tiket_pesawat', compact(
            'maskapai',
            'page',
            'headerText'
        ));
    }
    public function tiket_pesawat_show($slug)
    {
        if ($slug == "lihat_maskapai") {
            $headerText = "Lihat Maskapai Tersedia";
            $page = 'maskapai';
            $maskapai = ModelMaskapai::all();
            return view('tiket_pesawat', ['maskapai' => $maskapai, 'page' => $page, 'headerText' => $headerText]);
        } else if ($slug == "cek_harga_tiket") {
            $headerText = "Cek Harga Tiket";
            $page = 'hargaTiket';
            $hargaTiket = ModelHargaTiket::with('maskapai')->get();
            $usdToIdr = 15670;
            return view('tiket_pesawat', ['hargaTiket' => $hargaTiket, 'usdToIdr' => $usdToIdr, 'page' => $page, 'headerText' => $headerText]);
        } else if ($slug == "table_beli") {
            $headerText = "Beli Tiket Sekarang";
            $page = 'beli';
            $maskapai = ModelMaskapai::all();
            return view('tiket_pesawat', ['maskapai' => $maskapai, 'page' => $page, 'headerText' => $headerText]);
        } else if ($slug == "cek_durasi") {
            $headerText = "Cek Durasi Penerbangan";
            $page = 'durasi';
            $durasi = ModelDurasi::with('maskapai')->get();
            return view('tiket_pesawat', ['durasi' => $durasi, 'page' => $page, 'headerText' => $headerText]);
        } else {
            return view('index');
        }
    }
    public function beli_tiket($id)
    {
        $maskapai  = ModelMaskapai::findOrFail($id);
        $json =  json_encode(ModelHargaTiket::select('id_maskapai', 'harga_low', 'harga_top')->get());
        return view('beli_tiket', ['maskapai' => $maskapai, 'id' => $id, 'json' => $json]);
    }
    public function beli_tiket_belum_dibuat($id)
    {
        $maskapai  = ModelMaskapai::findOrFail($id);
        $user = Auth::user();
        return view('beli_tiket', ['maskapai' => $maskapai]);
    }
    public function beli_tiket_beta($id)
    {
        $maskapai  = ModelMaskapai::findOrFail($id);
        return view('beli_tiket_beta', ['maskapai' => $maskapai]);
    }
    public function beli_tiket_store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|ascii',
            'jumlah_tiket' => 'required|numeric',
            'tempat_lahir' => 'required|ascii',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email:dns',
            'gender' => 'required|in:pria,wanita',
            'alamat' => 'required|max:150',
            'kota' => 'required|in:palembang,batam,tanjung_pinang,bintan,jakarta,new_york,bandung,medan,kalimantan',
        ]);
        $data = "<h1>Info Data Diri Kamu Berdasarkan Form !</h1>";
        $data .= "\n<ul style='font-family:arial;'>";
        foreach ($validated as $key => $validate) {
            $data .= "\n  <li><h3>" . htmlspecialchars($key) . " : " . htmlspecialchars($validate) . "<h3></li>";
        }
        $data .= "\n</ul>";
        return $data;
    }
    public function test_slug($slug)
    {
        return dd($slug);
    }
}
