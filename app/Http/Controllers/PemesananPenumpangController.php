<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ServicePenumpang;
use Illuminate\Http\Request;

class PemesananPenumpangController extends Controller
{
    public function index(Request $request)
    {
        $items = ServicePenumpang::latest()->first();

        return view('pages.pemesanan-penumpang', [
            'items' => $items
        ]);
    }
}
