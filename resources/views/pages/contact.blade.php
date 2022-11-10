@extends('layout')

@section('title', 'contact page')

@section('content')
<h2>Ini halaman Contact</h2>
<div>
    @for($i = 1; $i <= 10; $i++)
    Nomor {{$i}} <br>
    @endfor

    @foreach($person as $data)
    Kontak{{$loop->iteration}} : {{$data}} <br>
    @endforeach
    </div>
@endsection