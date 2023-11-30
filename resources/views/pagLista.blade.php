@extends('pagPlantilla')

@section('titulo')
  <h1>Página Lista</h1>
@endsection

@section('seccion')
<h3>Lista</h3>
  @foreach ($xxx as $item)
    <p> {{$item->id }} - {{ $item->nomEst }} </p>
  @endforeach
@endsection