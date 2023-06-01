<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assets extends Model
{
    use SoftDeletes;

    protected $table = 'assets';

    protected $fillable = [
        'owners', 'kriterias_id', 'nama_assets', 'kategori', 'harga', 'foto','deskripsi'
    ];  

    protected $hidden = [

    ];
    public function kriterias(){
        return $this->belongsTo(kriteria::class, 'kriterias_id', 'id');
        
    }
    public function owners(){
        return $this->belongsTo(Owner::class, 'owners_id', 'id');
    }
}
