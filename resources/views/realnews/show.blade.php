@extends('layouts.showrealnews')

@section('content')
  <section class=" _bgdegree ">
    <div class="container p-3 col-6">
      <div class="news-containerfull">
        <h2>{{$realnew->headline}}</h2>
        <h4>{{$realnew->subheading}}</h4>
        <div class="_contenedorImagenNewsFull">
        <img class="_imagenNews" src="/storage/realnewsfiles/{{$realnew['realnewsfile']}}" alt=""><br>
        </div>
        <p>({{$realnew->caption}})</p>
        <p>{{$realnew->text}}</p>
      </div>
    </div>
  </section>
@endsection
