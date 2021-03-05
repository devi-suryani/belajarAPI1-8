<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaApi extends Model
{
    use HasFactory;
    protected $table='berita';

    protected $fillable=[
        'judul','isi','users_id','kategori_artikel_id'
    ];

    public function kategoriBerita(){
        return $this->belongsTo(\App\kategoriBerita::class,'kategori_artikel_id','id');
    }

    public function Users(){
        return $this->belongsTo(\App\Users::class,'users_id','id');
    }
}
