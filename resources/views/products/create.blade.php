@extends('layout')

@section('content')

  <div class="col-sm-8">
    <h2>
      Nuevo Producto
      <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Regresar</a>
    </h2>
    <hr>
    @include('products.fragment.error')

    {!! Form::open(['route' => 'products.store']) !!}

        @include('products.fragment.form')

    {!! Form::close() !!}

  </div>

  <div class="col-sm-4">
      @include('products.fragment.aside')
  </div>
@endsection
