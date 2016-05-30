@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product List</h1></p><hr>

        @foreach($product as $produk)
            <h3>{{ $produk->barang_nama }}</h3>
            <h4> Price: ${{ $produk->barang_harga}}</h4>
            <h4> Description: {{ $produk->barang_deskripsi}}</h4>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('user.show', $produk->id) }}" class="btn btn-info">View Product</a>
                    <a href="{{ url('/addProduct', $produk->id) }}" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@stop