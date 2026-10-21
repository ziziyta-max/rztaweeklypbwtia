<?php
use App\Http\Controllers\BeritaController;
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



Route::get('/berita', [BeritaController::class, 'tampilberita']); 

Route::get('berita/{slug}', [BeritaController::class, 'tampilberitatunggal']); 

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});