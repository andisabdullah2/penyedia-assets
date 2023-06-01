<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ServiceBarang;

use Illuminate\Http\Request;

class PemesananBarangController extends Controller
{
    public function index(Request $request)
    {
        $item = ServiceBarang::latest()->first();

        return view('pages.pemesanan-barang', [
            'item' => $item
        ]);
    }
    
}
