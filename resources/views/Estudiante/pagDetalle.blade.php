@extends('pagPlantilla')

@section('titulo')
  <h1>Página lista</h1>
@endsection

@section('seccion')
  <h3>Detalle estudiante</h3>
  <p>Id:                  {{ $xDetAlumnos->id }}</p>
  <p>Código:              {{ $xDetAlumnos->codEst }}</p>
  <p>Apellidos y nombres: {{ $xDetAlumnos->apeEst }}, {{ $xDetAlumnos->nomEst }}</p>
  <p>Fecha de nacimiento: {{ $xDetAlumnos->fnaEst }}</p>
  <p>Turno:               {{ $xDetAlumnos->turMat }}</p>
  <p>Semestre:            {{ $xDetAlumnos->semMat }}</p>
  <p>Estado de matricula: {{ $xDetAlumnos->estMat }}</p>
  
@endsection
    