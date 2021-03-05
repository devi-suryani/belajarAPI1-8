<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class BabSatuController extends Controller

{
    public function a1(){
        $artikels=Artikel::where ('id',1)->where('users_id',1)->get();

        return $artikels;
    }
    
    public function a2()
    {
        $artikels=Artikel::where ('id',2)->orwhere('users_id',5)->get();

        return $artikels;
    }

    public function a3()
    {
        $artikels=Artikel::where ('id',2)->whereHas('user',function($query){
            $query->where('name','Devi');
        })->with('user')->get();
        return $artikels;
    }

    public function a4()
    {
       
        $pengumuman=Pengumuman::whereHas('user',function($query){
            $query->whereHas('galeri',function($query){
                $query->where('id',2);
            });
        })->with('user.galeri')->get();

        return $pengumuman;
    }


}
