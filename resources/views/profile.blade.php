@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama : {{ $name }}</p>
    <p>NIM : {{ $nim }}</p>
    <p>Program Studi : {{ $prodi }}</p>
    <img src="images/{{ $gambar }}" width="200px"/>

@endsection