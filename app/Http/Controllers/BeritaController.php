<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{ 
    public function tampilberita()
    
   { return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::all(),
    ]);
}
    public static function tampilberitatunggal($slug)
     {
        $beritas = Berita::all();
      
         $singlenews = [];
    
 foreach ($data_berita as $berita) 
     {
         if($berita["slug"] === $slug) 
         {
             $singlenews = $berita;
         }
     }
    return view('beritatunggal', [
        "title" => $singlenews["judul"],
        "singlenews" => Berita::getBerita($slug),
    ]);
}
}
