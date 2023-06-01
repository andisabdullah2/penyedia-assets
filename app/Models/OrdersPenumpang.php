<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersPenumpang extends Model
{
    use SoftDeletes;

    protected $table = 'orders_penumpang';


    protected $fillable = [
        'driver_id','penumpang_id','status','services_penumpang_id','name_driver','name_penumpang'
    ];  

    protected $hidden = [

    ];

    // public function user(){  // relasi dengan users tabel
    //     return $this->belongsTo(User::class, 'users_id', 'id');
    // }
    // public function lokasi_rute(){
    //     return $this->belongsTo(LokasiRute::class, 'lokasi_rutes_id', 'id');
        
    // }
    // public function tujuan_rute(){
    //     return $this->belongsTo(TujuanRute::class, 'tujuan_rutes_id', 'id');
    // }
}
