<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    use HasFactory;
    protected $table='kategori_pengumuman';

    protected $fillable=['isi','users_id'];

    public function Pengumumans(){
        return $this->belongsTo(App\Pengumumans::class,'kategori_pengumuman_id','id');
    }

    public function pengumuman(){
        return $this->belongsTo(App\Pengumuman::class,'users_id','id');
    }
}
