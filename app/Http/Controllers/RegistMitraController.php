<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraDriver;
use App\Models\User;
use App\Models\TujuanRute;
use App\Models\LokasiRute;
use App\Http\Requests\Admin\MitraDriverRequest;
use RealRashid\SweetAlert\Facades\Alert;



class RegistMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // protected function validator(array $data)
    //     {
    //         return Validator::make($data, [
    //             'users_id' => ['required', 'unique:users_id'],
    //         ]);
    //     }
    public function index()
    {
        return view('pages.home-mitra');
    }

    public function create()
    {
        $user = User::all();
        $lokasi_rute= LokasiRute::all();
        $tujuan_rute= TujuanRute::all();
        return view('pages.daftar-mitra', [
            'user' => $user,
            'lokasi_rute' => $lokasi_rute,
            'tujuan_rute' => $tujuan_rute,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MitraDriverRequest $request)
    {
        $data = $request->all();
        $data['image_profil'] = $request->file('image_profil')->store(
            'assets/mitra-driver', 'public'
        );
        $data['image_ktp'] = $request->file('image_ktp')->store(
            'assets/mitra-driver', 'public'
        );
        $data['image_sim'] = $request->file('image_sim')->store(
            'assets/mitra-driver', 'public'
        );
        $data['image_stnk'] = $request->file('image_stnk')->store(
            'assets/mitra-driver', 'public'
        );

        MitraDriver::create($data);
        Alert::success('Selamat Pendaftaran Anda Berhasil Dikirim', 'Tunggu Beberapa Saat Untuk Validasi Pendaftaran, 
        Pendaftaran Hanya Dapat Dilakukan 1 Kali, Kami Akan Menginfokan Melalui Chat WA jika Pendaftaran Berhasil Diverifikasi');
        // return redirect()->back();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
