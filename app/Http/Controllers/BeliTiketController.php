<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliTiketController extends Controller
{
    //
    public function detail_pribadi($id)
    {
        $page = 1;
        $title = "Form Detail Pribadi";
        $icon = 'files/img/form/detail_pribadi.svg';
        return view('beli_tiket_beta', ['page' => $page, 'title' => $title, 'id' => $id, 'icon' => $icon]);
    }
    public function detail_pribadi_store(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email:dns',
            'phone' => 'required|numeric'
        ]);
        $page = 2;
        $title = "Form Detail Penerbangan";
        $icon = 'files/img/form/detail_penerbangan.svg';
        return view('beli_tiket_beta', ['page' => $page, 'title' => $title, 'id' => $id, 'icon' => $icon]);
    }
}
