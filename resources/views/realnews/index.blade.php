@extends('layouts.main')

@section('content')
<div class="_ranking">

<h1 style="color:white">Feed de Realnews</h1>

@foreach ($realnews as $realnew)
<div class="noticia">
    <li>
    <div class="card mb-3  " style="max-width: 540px;">
       <div class="row no-gutters">
          <div class="col-md-4">
          <img src="/storage/realnewsfiles/{{$realnew->realnewsfile}}" width=100% alt="imagen">
           </div>
            <div class="col-md-8">
             <div class="card-body">
             <div class="ranking_type">
           <img class="_newsType" src="img/internet.png" alt="news_type">

         </div>
               <h5 class="card-title">{{$realnew->headline}}</h5>
               <h6 class="card-title">{{$realnew->subheading}}</h6>
               <p class="card-text">{{$realnew->text}}</p>
               <p class="card-text"><small class="text-muted">{{$realnew->caption}}</small></p>
               <a href="/realnews/{{$realnew->id}}" class="d-flex btn btn-primary __comprar">Ver detalle</a>
             </div>
         </div>
       </div>
     </div>

     </li>
     </div>
@endforeach

@endsection
</div>




