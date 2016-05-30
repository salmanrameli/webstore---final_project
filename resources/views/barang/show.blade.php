@extends('layouts.admin')

@section('content')

    <h1>{{ $barang->barang_nama}}</h1>
    <h2>Price: ${{ $barang->barang_harga}}</h2><br>
    <p class="lead">Supplier: {{ $barang->barang_supplier}}</p>
    <p class="lead">Stock: {{ $barang->barang_stok}}</p>
    <p class="lead">Type of Product: {{ $barang->barang_jenis}}</p>
    <p class="lead">Description: {{ $barang->barang_deskripsi}}</p>

    <hr>

    <a href="{{ route('barang.index') }}" class="btn btn-info">Back to all products</a>
    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit Product</a>

@stop