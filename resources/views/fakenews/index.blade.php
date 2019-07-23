@extends('layouts.main')

@section('content')
<div class="">
  <div class="container p-3">
  <h1>Feed de Fakenews</h1>
  <div class="row">
        @foreach ($fakenews as $fakenew)
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="card-columns">
              <div class="card bg-light" style="width: 22rem;">
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
