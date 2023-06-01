<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rute extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'rute_driver' 
    ];  

    protected $hidden = [

    ];
    
    public function mitra_drivers(){
        return $this->hasMany(MitraDriver::class, 'rutes_id', 'id');
    }
}
