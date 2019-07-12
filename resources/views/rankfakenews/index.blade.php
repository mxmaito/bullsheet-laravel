@extends('layouts.main')

@section('content')

  <section class="_ranking">
     <div class="_textosRanking">
    <h2 class="_rank">Ranking de Fake News</h2>
    </div>
    <?php $i = 0; ?>
    <?php $cant = $rankNews->count(); ?>
    <ul>
    @foreach ($rankNews as $rankNew)
    <?php $i++; ?>
    <div class="noticia">
    <li>
         <div class="card mb-3" style="max-width: 540px;">
             <div class="row no-gutters">
                 <div class="col-md-4">
                 <img src="/storage/fakenewsfiles/{{$rankNew->fakenewsfile}}" width=100% alt="imagen">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                     <div class="ranking_type">
                 <img class="_newsType" src="img/internet.png" alt="news_type">
                 <p>{{$i}}/{{$cant}}</p>
                 </div>
                     <h5 class="card-title">{{$rankNew->title}}</h5>
                     <h6 class="card-title">{{$rankNew->question}} </h6>
                     <a href="/fakenews/{{$rankNew->id}}" class="d-flex btn btn-primary __comprar">Ver detalle</a>

                     </div>
                 </div>
             </div>
         </div>
     </li>
     </div>
     @endforeach
     </ul>

  </section>

  <section class="_rankTable">
    <h2 class="_rank2">Ranking de Usuarios de Fake News</h2>
    <table class="table table-borderless">
       <thead>
           <tr>
               <th scope="col"></th>
               <th scope="col">Nombre de Usuario</th>
               <th scope="col">Cantidad de notas subidas</th>

               </tr>
       </thead>
       <tbody>
       <?php $j = 0; ?>
       @foreach($ranks as $rank)
           <tr>
           <?php $j++; ?>
           <th scope="row">{{$j}}</th>
           <td>{{$rank->first_name . ' ' . $rank->last_name}}</td>
           <td>{{$rank->news_count}}</td>

           </tr>
           @endforeach
       </tbody>
   </table>
  </section>


@endsection
