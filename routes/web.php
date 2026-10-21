<?php
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Razita Kafia Laiyina",
        "nim" => "12342520001",
        "prodi" => "Teknologi Informasi",
        "gambar" => "me.jpg"
    ]);
});



Route::get('/berita', function () use ($data_berita) {
    return view('berita', [
        "title" => "Berita",
        "data_berita" => Berita :: ambildata(),
    ]);
});

Route::get('berita/{slug}', function ($slug) {

$data_berita = [
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "jita",
        "konten" => "indonesia menang"
    ],
    [
        "judul" => "Indonesia Juara Makan Pedas",
        "slug" => "indonesia-juara-makan-pedas",
        "penulis" => "aku",
        "konten" => "orang indonesia suka makan seblak"
    ]
];


$singlenews = [];
foreach ($data_berita as $berita) 
    {
        if($berita['slug'] == $slug) 
        {
            $singlenews = $berita;
        }
    }

    return view('beritatunggal', [
        "title" => "judul berita tunggal",
        "singlenews" => $singlenews
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});