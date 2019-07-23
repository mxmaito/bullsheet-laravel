@extends('layouts.main')

@section('content')
  <div class="">
    <div class="container p-3">
      <h1>Feed de Realnews</h1>
      <div class="row">
        @foreach ($realnews as $realnew)
        <div  class="col-sm-10 col-md-6 col-lg-4 noticiaReal">
          <div class="card-columns">
            <div class="card bg-light" style="width: 22rem;">
              <img src="/storage/realnewsfiles/{{$realnew->realnewsfile}}" width=100% alt="imagen">
              <div class="card-body">
                  <div class="card-body">
                    <h5 class="card-title">{{$realnew->headline}}</h5>
                    <h6 class="card-title">{{$realnew->subheading}}</h6>
                    <p class="card-text">{{$realnew->text}}</p>
                    <p class="card-text"><small class="text-muted">{{$realnew->caption}}</small></p>
                    <div class="">
                      <a href="/realnews/{{$realnew->id}}" class="d-flex flex-wrap btn btn-primary  justify-content-center">Ver detalle</a>
                    </div>
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
