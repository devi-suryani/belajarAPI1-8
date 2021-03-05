<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Galeri extends Model
{
    use HasFactory;
    protected $table='galeri';

    protected $fillable=[
        'judul','isi','users_id','kategori_galeri_id'
    ];

    public function kategoriGaleri(){
        return $this->belongsTo(\App\kategoriGaleri::class,'kategori_galeri_id','id');
    }

    public function Users(){
        return $this->belongsTo(\App\Users::class,'users_id','id');
    }
}
