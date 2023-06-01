<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceBarang extends Model
{
    use SoftDeletes;

    protected $table = 'services_barang';


    protected $fillable = [
        'alamat_penjemputan', 'alamat_pengantaran','nama_barang','berat_barang','jenis_barang','nama_penerima','driver_id','penumpang_id','name_driver','name_penumpang','nohp_penerima'
    ];  

    protected $hidden = [

    ];
    
}
