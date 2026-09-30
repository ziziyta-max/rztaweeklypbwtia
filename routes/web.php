<<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
    ]);
}); 

Route::get('/profile', function () {
    return view('profile', [
         "title" => "profile",
        "name"  => "Razita Kafia Laiyina",
        "nim" => "12342520001",
        "prodi" => "Teknologi Informasi",
        "gambar" => "me.jpg"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
         "title" => "kontak",
    ]);
});

Route::get('/berita', function () {
    return view('berita',[
         "title" => "berita",
    ]);
});