@extends('layouts.showfakenews')

@section('content')

<section class=" _bgdegree ">



  <div class="container p-3 col-6">

<div class="news-containerfull">
    <h2>{{$fakenew->title}}</h2>
    <div class="_contenedorImagenNewsFull">
    <img class="_imagenNews" src="/storage/fakenewsfiles/{{$fakenew['fakenewsfile']}}" alt="">
    </div>
      <p>{{$fakenew->question}}</p>
    </div>
  </div>
</section>

@endsection
