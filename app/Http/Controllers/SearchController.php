<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assets;
use App\Models\User;
use App\Models\Kriteria;
use App\Models\Owner;
use App\Http\Requests\Admin\AssetsRequest;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $items = Assets::with(['kriterias', 'owners'])
            ->where('nama_assets', 'LIKE', '%' . $search . '%')
            ->get();

        return view('pages.search', compact('items', 'search'));
    }

    public function searchdropdown(Request $request)
    {
        $jenis_kriteria = $request->input('jenis_kriteria');
        $kategori = $request->input('kategori');

        $items = Assets::with(['kriterias', 'owners'])
            ->join('kriterias', 'assets.kriterias_id', '=', 'kriterias.id')
            ->where('kriterias.jenis_kriteria', $jenis_kriteria)
            ->where('assets.kategori', $kategori)
            ->get();

        return view('pages.search', compact('items', 'jenis_kriteria', 'kategori'));
    }


}
