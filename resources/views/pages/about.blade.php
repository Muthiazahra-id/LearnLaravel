@extends('layout')

@section('title', 'about page')

@section('content')
<h2>Ini halaman about</h2>
<div>
    <p>Berikut Fasilitas yang bisa anda gunakan.Login sebagai:</p>
    @if($role == "admin")
    Admin - Menambahkan , Mengedit, Menghapus barang
    @elseif($role == "teller")
    Teller - Mengunduh Laporan Kwu
    @else
    Kamu aneh, role tidak diketahui
    @endif

</div>
@endsection
