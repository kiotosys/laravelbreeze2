@extends('pagPlantilla')

@section('titulo')
  <h1>Página lista</h1>
@endsection

@section('seccion')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  @foreach($xAlumnos as $item)
  <tbody>
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item-> codEst}}</td>
      <td>{{ $item->apeEst }}, {{ $item->nomEst }}</td>
      <td>@mdo</td>
    </tr>
    <p>  </p>
    @endforeach
  </tbody>
</table>




  
@endsection
    