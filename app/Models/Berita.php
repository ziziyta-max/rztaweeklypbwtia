<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    
public function ambildata ()
{
    
    return $data_berita;
}
public static function getBerita($slug)
{
 $beritas = self::$data_berita;
 $singlenews = [];
    
 foreach ($data_berita as $berita) 
     {
         if($berita['slug'] == $slug) 
         {
             $singlenews = $berita;
         }
     }
 return $singlenews;
}
public static function getJudul($slug)
{
  $berita = self::getBerita($slug);

  return $berita ["judul"];
}
}
