<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assets;
use App\Models\User;
use App\Models\Kriteria;
use App\Models\Owner;
use App\Http\Requests\Admin\AssetsRequest;

class HomeController extends Controller
{
    public function index()
    {
        $items = Assets::with(['kriterias', 'owners'])
                        ->orderBy('created_at', 'desc')
                        ->get();


        return view('pages.home', [
            'items' => $items
        ]);
    }

}
