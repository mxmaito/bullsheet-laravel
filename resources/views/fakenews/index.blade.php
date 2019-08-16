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
    <div class="row">
          @foreach ($fakenews as $fakenew)
            <div class="col-sm-4 d-flex flex-column">
              <div class="card-columns d-flex align-content-around flex-wrap">
                <div class="card bg-light" >
                  <img class="card-img-top" src="/storage/fakenewsfiles/{{$fakenew->fakenewsfile}}"  alt="imagen">
                  <div class="card-body">
                    <h5 class="card-title">{{$fakenew->title}}</h5>
                    <h6 class="card-title">{{$fakenew->question}} </h6>
                      <div class="">
                        <a href="/fakenews/{{$fakenew->id}}" class="d-flex flex-wrap btn btn-primary  justify-content-center">Ver detalle</a>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted"></small>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          @endforeach
    </div>
  </div>
</div>
@endsection
