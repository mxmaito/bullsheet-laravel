@extends('layouts.showfakenews')

@section('content')

<section class="_ranking">


  <div class="text-light text-center">

    <br><h2>
    {{$fakenew->title}}
    </h2><br> <br>
    <div class="_contenedorImagenNews">
    <img class="_imagenNews" src="/storage/fakenewsfiles/{{$fakenew['fakenewsfile']}}" alt="">
    </div>
    <br>
    <br><h3>
    {{$fakenew->question}}
    </h3><br> <br>

  </div>
</section>

@endsection
