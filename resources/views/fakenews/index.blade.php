@extends('layouts.main')

@section('content')
<div class="_ranking">

<h1 style="color:white">Feed de Fakenews</h1>

  @foreach ($fakenews as $fakenew)
  <div class="noticia">
    <li>
         <div class="card mb-3" style="max-width: 540px;">
             <div class="row no-gutters">
                 <div class="col-md-4">
                 <img src="/storage/fakenewsfiles/{{$fakenew->fakenewsfile}}" width=100% alt="imagen">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                     <div class="ranking_type">
                 <img class="_newsType" src="img/internet.png" alt="news_type">

                 </div>
                     <h5 class="card-title">{{$fakenew->title}}</h5>
                     <h6 class="card-title">{{$fakenew->question}} </h6>

                     </div>
                 </div>
             </div>
         </div>
     </li>
     </div>
  @endforeach


@endsection
</div>



