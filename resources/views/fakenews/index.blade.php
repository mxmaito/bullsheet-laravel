@extends('layouts.main')

@section('content')


<h1>Acá va el feed de fakenews</h1>

  @foreach ($fakenews as $fakenew)
        <div class="d-flex card col-12 col-md-4 col-lg-3 " style="width: 18rem;">
          <div class="card-body">
            <strong><p class="card-text ">{{$fakenew->title}}</p></strong>
            <p class="card-text ">{{$fakenew->question}}</p>

            <a href="/fakenews/{{$fakenew->id}}" class="d-flex btn btn-primary __comprar">Ver detalle</a>
          </div>
        </div>
  @endforeach


@endsection
