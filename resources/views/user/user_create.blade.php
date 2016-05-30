@extends('layouts.app')

@section('content')
    @if($errors->any()) <div class="alert alert-danger"> @foreach($errors->all() as $error) <p>{{ $error }}</p> @endforeach </div> @endif
    <div class="container">
        <h1>Add a New Product</h1>
        <hr>
        {!! Form::open([ 'route' => 'user.store' ]) !!}

        <div class="form-group">
            {!! Form::email('user_email', 'E-mail:', ['class' => 'control-label']) !!}
            {!! Form::text('user_email', null, ['class' => 'form-control']) !!}
        </div>

        {{--<div class="form-group">--}}
            {{--{!! Form::label('barang_harga', 'Harga Produk:', ['class' => 'control-label']) !!}--}}
            {{--{!! Form::text('barang_harga', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--{!! Form::label('barang_deskripsi', 'Deskripsi Produk:', ['class' => 'control-label']) !!}--}}
            {{--{!! Form::textarea('barang_deskripsi', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}

        {!! Form::submit('Order Product', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>

@stop