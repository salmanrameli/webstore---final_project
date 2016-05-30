@extends('layouts.admin')

@section('content')
    @if($errors->any()) <div class="alert alert-danger"> @foreach($errors->all() as $error) <p>{{ $error }}</p> @endforeach </div> @endif
    <div class="container">
        <h1>Add a New Product</h1>
        <p class="lead"><a href="{{ route('barang.index') }}">Go back to all products.</a></p>
        <hr>
        {!! Form::open([ 'route' => 'barang.store' ]) !!}

        <div class="form-group">
            {!! Form::label('barang_nama', 'Nama Produk:', ['class' => 'control-label']) !!}
            {!! Form::text('barang_nama', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('barang_harga', 'Harga Produk:', ['class' => 'control-label']) !!}
            {!! Form::text('barang_harga', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('barang_deskripsi', 'Deskripsi Produk:', ['class' => 'control-label']) !!}
            {!! Form::textarea('barang_deskripsi', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Register Product', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

    </div>

@stop