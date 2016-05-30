@extends('layouts.admin')

@section('content')
    <h1>Edit Product</h1>
    <p class="lead">Edit this product below. <a href="{{ route('barang.index') }}">Go back to all products.</a></p>
    <hr>

    {!! Form::model($barang, [
    'method' => 'PATCH',
    'route' => ['barang.update', $barang->id]
    ]) !!}

    <div class="form-group">
        {!! Form::label('barang_nama', 'Price:', ['class' => 'control-label']) !!}
        {!! Form::text('barang_nama', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('barang_harga', 'Price:', ['class' => 'control-label']) !!}
        {!! Form::text('barang_harga', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('barang_deskripsi', 'Price:', ['class' => 'control-label']) !!}
        {!! Form::textarea('barang_deskripsi', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Product', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop