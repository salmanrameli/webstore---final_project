@extends('layouts.admin')

@section('content')
    <h1>{{ $barang->barang_nama }}</h1>
    <p class="lead">{{ $barang->barang_harga }}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('barang.index') }}" class="btn btn-info">Back to all proucts</a>
            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit Product</a>
        </div>

        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['barang.destroy', $barang->id]
            ]) !!}
            {!! Form::submit('Delete this Product?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop