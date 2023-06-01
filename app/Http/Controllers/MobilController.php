<?php

namespace App\Http\Controllers;

use App\Models\LokasiRute;
use App\Models\MitraDriver;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MobilController extends Controller
{
    public function index(Request $request)
    {
        // $items['lokasi_rutes_id'] = Str::slug($request->lokasi);

            if($request->has('search')) {
                // $items = MitraDriver::with(['user',  'lokasi_rute','tujuan_rute'])
                //     ->where('lokasi_rutes_id', 'LIKE', '%' .$request->search. '%')->get();

                // $lokasi =  LokasiRute::where('lokasi', 'LIKE', '%'.$request->search.'%')->has('mitra_drivers')->first();
                
                // $items = $lokasi->mitra_drivers ?? collect();
            }
            else{
                // $items = MitraDriver::all();
            }
         return view('pages.mitra-mobil', [
            // 'items' => $items,
        ]);
       
        
    }
    

    // public function search(Request $request)
    // {
    //     //   $items = MitraDriver::with([
    //     //     'user',  'lokasi_rute','tujuan_rute'])->get();
            
    //        //'lokasi' == $items->lokasi_rute->lokasi;

    //         if($request->has('search')) {
    //             $items = MitraDriver::with(['user',  'lokasi_rute','tujuan_rute'])->where('lokasi', 'LIKE', '%' .$request->search. '%')->get();
    //         }else{
    //             $items = MitraDriver::all();
    //         }

    //          return view('pages.mitra-mobil', [
    //         'items' => $items,
    //     ]);
    // }
}
