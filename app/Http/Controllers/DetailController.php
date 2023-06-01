<?php

namespace App\Http\Controllers;
use App\Models\Assets;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Assets::with([
            'kriterias','owners'])->where('id', $id)->firstOrFail();

        $items = Assets::with(['kriterias', 'owners'])
            ->inRandomOrder()
            ->get();
        return view('pages.detail', [
            'item'  => $item,
            'items' => $items
             ]);

    }
    
}

