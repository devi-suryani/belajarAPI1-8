<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;
    protected $table='kategori_artikel';

    protected $fillable=['isi','users_id'];

    public function Artikels(){
        return $this->belongsTo(App\Artikels::class,'kategori_artikel_id','id');
    }

    public function artikel(){
        return $this->belongsTo(App\Artikel::class,'users_id','id');
    }
}
