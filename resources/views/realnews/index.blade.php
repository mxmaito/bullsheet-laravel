@extends('layouts.main')

@section('content')


<h1>Acá va el feed de realnews</h1>

@foreach ($realnews as $realnew)
      <div class="d-flex card col-12 col-md-4 col-lg-3 " style="width: 18rem;">
        <div class="card-body">
          <strong><p class="card-text ">{{$realnew->headline}}</p></strong>
          <p class="card-text ">{{$realnew->subheading}}</p>
          <p class="card-text ">{{$realnew->caption}}</p>
          <p class="card-text ">{{$realnew->text}}</p>
          <a href="/fakenews/{{$realnew->id}}" class="d-flex btn btn-primary __comprar">Ver detalle</a>
        </div>
      </div>
@endforeach

@endsection
