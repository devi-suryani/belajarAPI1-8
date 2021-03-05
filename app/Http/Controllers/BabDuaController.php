<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class BabDuaController extends Controller

{
    public function a5()
    {
        $pengumuman=Pengumuman::whereHas('user',function($query){
            $query->whereHas('galeri',function($query){
                $query->whereHas('galeri',function($query){
                    $query->where('nama','like','Aut%,');   
            });
        });
    })->with('user.galeri.kategoriGaleri')->get();
    return $pengumuman;
}

    public function a6()
    {
    $pengumuman=Pengumuman::whereHas('user',function($q){
        $q->whereHas('galeri')->whereHas('berita');
    })->first();
    return $pengumuman;
}
}