<?php

namespace App\Http\Controllers\Admin;
use App\Models\StatusBarang;
use App\Models\User;
use App\Models\OrdersBarang;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksiBarangController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $item = User::join('orders_penumpang', 'users.id', '=', 'orders_penumpang.penumpang_id')
                    ->join('services_penumpang', 'orders_penumpang.services_penumpang_id', '=', 'services_penumpang.id')
                    ->select(
                        'users.id as user_id',
                        'services_penumpang.id as services_id',
                        'orders_penumpang.id as orders_penumpang_id',
                        'users.name as user_name',
                        'orders_penumpang.name_penumpang as name_penumpang',
                        'orders_penumpang.status as status',
                        'orders_penumpang.name_driver as name_driver',
                        'orders_penumpang.penumpang_id',
                        'orders_penumpang.driver_id',
                        'orders_penumpang.services_penumpang_id',
                        'services_penumpang.alamat_penjemputan as alamat_jemput',
                        'services_penumpang.alamat_pengantaran as alamat_antar',
                        'services_penumpang.jumlah_penumpang as jumlah_penumpang',
                    )
                    ->get();
        
        $item2 = User::join('orders_barang', 'users.id', '=', 'orders_barang.penumpang_id')
                    ->join('services_barang', 'orders_barang.services_barang_id', '=', 'services_barang.id')
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
        return view('pages.admin.transaction.index', [
            'item'  => $item,
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

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     

    
}

