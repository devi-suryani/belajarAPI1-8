<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $table='kategori_berita';

    protected $fillable=['isi','users_id'];

    public function Beritas(){
        return $this->belongsTo(App\Beritas::class,'kategori_artikel_id','id');
    }

    public function berita(){
        return $this->belongsTo(App\Berita::class,'users_id','id');
    }
}
