<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;
    protected $table='kategori_galeri';

    protected $fillable=['isi','users_id'];

    public function galeris(){
        return $this->belongsTo(App\Galeris::class,'kategori_pengumuman_id','id');
    }

    public function galeri(){
        return $this->belongsTo(App\Galeri::class,'users_id','id');
    }
}
