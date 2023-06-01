<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use SoftDeletes;

    protected $table = 'owners';

    protected $fillable = [
        'nama_owner','instagram','email','phone' 
    ];  

    protected $hidden = [

    ];
    
    public function mitra_drivers(){
        return $this->hasMany(MitraDriver::class, 'tujuan_rutes_id', 'id');
    }
}
