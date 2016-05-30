@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Product List</h1>
        <p class="lead">Here's a list of all your Products.
            <a href="{{ route('barang.create') }}">Add a new one?</a>
        </p><hr>

        @foreach($product as $produk)
            <h3>{{ $produk->barang_nama }}</h3>
            <h4> Price: ${{ $produk->barang_harga}}</h4>
            <h4> Description: {{ $produk->barang_deskripsi}}</h4>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('barang.show', $produk->id) }}" class="btn btn-info">View Product</a>
                    <a href="{{ route('barang.edit', $produk->id) }}" class="btn btn-primary">Edit Product</a>
                </div> <div class="col-md-6 text-right">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['barang.destroy', $produk->id]]) !!}
                    {!! Form::submit('Delete this Product?', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>

        @endforeach
    </div>
@stop