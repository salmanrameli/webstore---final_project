@extends('layouts.app')

@section('content')

    <h1>{{ $barang->barang_nama}}</h1>
    <h3>Price: ${{ $barang->barang_harga}}</h3>
    <p class="lead">Description: {{ $barang->barang_deskripsi}}</p>
    <hr>

    <a href="{{ route('user.index') }}" class="btn btn-info">Back to all products</a>

@stop