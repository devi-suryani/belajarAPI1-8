<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=Berita::all();

        return $berita;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $input=$request->all();
       
        $berita=Berita::create($input);
        return $berita;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=Berita::find($id);

        return $berita;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();

        
        $berita=Berita::find($id);

        if(empty($berita)){
            return response()->json(['message'=>"data tidak ditemukan"],404);
        }

        $berita->update($input);
        return response()->json($berita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::find($id);

        if(empty($berita)){
            return response()->json(['message'=>"data tidak ditemukan"],404);
        }
         $berita->delete();

         return response()->json(['message'=>"data telah dihapus"]);
    }
}
