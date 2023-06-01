<?php

namespace App\Http\Controllers;
use App\Models\StatusBarang;
use App\Models\User;
use App\Models\OrdersBarang;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusBarangController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
                $item2 = User::join('orders_barang', 'users.id', '=', 'orders_barang.penumpang_id')
                    ->join('services_barang', 'orders_barang.services_barang_id', '=', 'services_barang.id')
                    ->where('users.id', $user->id)
                    ->select(
                        'users.id as user_id',
                        'services_barang.id as services_id',
                        'orders_barang.id as orders_barang_id',
                        'users.name as user_name',
                        'orders_barang.name_penumpang as name_penumpang',
                        'orders_barang.status as status',
                        'orders_barang.name_driver as name_driver',
                        'orders_barang.penumpang_id',
                        'orders_barang.driver_id',
                        'services_barang.jenis_barang',
                        'orders_barang.services_barang_id',
                        'services_barang.nama_barang',
                        'services_barang.berat_barang',
                        'services_barang.nohp_penerima',
                        'services_barang.alamat_penjemputan as alamat_jemput',
                        'services_barang.alamat_pengantaran as alamat_antar',
                    )
                    ->get();
        //$item = StatusPenumpang::where('id', 11)->get();//kondisi;
        return view('pages.status-penumpang', [
            'item2'  => $item2
             ]);

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = OrdersBarang::findOrFail($id);

        $item->update($data);

        return redirect()->route('status-penumpang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
}

