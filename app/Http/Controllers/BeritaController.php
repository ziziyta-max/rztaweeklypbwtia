<?php

namespace App\Http\Controllers;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function tampilberita()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all(),
        ]);
    }

    public function tampilberitatunggal($slug)
    {
     $beritas = Berita::all();

     $singlenews = [];

    foreach ($beritas as $berita) 
   {
        if($berita['slug'] == $slug) 
        {             
            $singlenews = $berita;
        }
    }
        return view('beritatunggal', [
            "title" => $singlenews['judul'],
            "singlenews" => $singlenews
        ]);
    }
}