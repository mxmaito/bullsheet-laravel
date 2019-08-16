@extends('layouts.main')

@section('content')
<div class="">
  <div class="container p-3">
    <h1 class="text-center">Fakenews</h1>
    <br>
    <form action="{{ url('/searchfakenews') }}" method="get" enctype="multipart/form-data">
      <div class="input-group mb-3">
        <input name ="busqueda" type="search" class="form-control" placeholder="Búsqueda por palabras" aria-label="" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
          </div>
      </div>
    </form>
    <br>
    <h2 class="text-center">No se encontraron resultados para tu búsqueda</h2>
  </div>
</div>
@endsection
