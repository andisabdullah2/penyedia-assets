<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kriteria extends Model
{
    use SoftDeletes;
    protected $table = 'kriterias';


    protected $fillable = [
        'jenis_kriteria' 
    ];  

    protected $hidden = [

    ];
}
