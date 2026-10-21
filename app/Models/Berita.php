<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    static $data_berita = [
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
}
