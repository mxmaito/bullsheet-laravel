
@extends('layouts/main')

   @section('content')

     <section class="_ranking">
       <div class="_textosRanking">
       <h2 class="_rank">Ranking de Real News</h2>
       <a class="_verNoticia" href="/realnews">ver todas las noticias</a>
       </div>
       <?php $i = 0; ?>
       <?php $cant = $realnews->count(); ?>
       <ul>
       @foreach ($realnews as $realnew)
       <?php $i++; ?>
       <div class="noticia">
       <li>

       <div class="card mb-3  " style="max-width: 540px;">
          <div class="row no-gutters">
             <div class="col-md-4">
             <img src="/storage/realnewsfiles/{{$realnew['realnewsfile']}}" width=100% alt="imagen">
              </div>
               <div class="col-md-8">
                <div class="card-body">
                <div class="ranking_type">
              <img class="_newsType" src="img/internet.png" alt="news_type">
              <p>{{$i}}/{{$cant}}</p>
            </div>
                  <h5 class="card-title">{{$realnew->headline}}</h5>
                  <h6 class="card-title">{{$realnew->subheading}}</h6>
                  <p class="card-text">{{$realnew->text}}</p>
                  <p class="card-text"><small class="text-muted">{{$realnew->caption}}</small></p>
                </div>
            </div>
          </div>
        </div>

        </li>
        </div>
        @endforeach
        </ul>

<<<<<<< HEAD:resources/views/news.blade.php
     </section>
          <section class="_rankTable">
               <h2 class="_rank2">Ranking de Usuarios</h2>
               <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Nombre de Usuario</th>
                      <th scope="col">Cantidad de notas subidas</th>
                      <th scope="col">Valoracion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Nombre de Usuario</td>
                      <td>Cantidad de notas subidas</td>
                      <td>Valoracion</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Nombre de Usuario</td>
                      <td>Cantidad de notas subidas</td>
                      <td>Valoracion</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Nombre de Usuario</td>
                      <td>Cantidad de notas subidas</td>
                      <td>Valoracion</td>
                    </tr>
                  </tbody>
                </table>
              </section>



@endsection()
=======



       <!-- <div class="">
				<article class="noticia">
					<div class="news-container">
            <div class="ranking_type">
              <img class="_newsType" src="img/</*?=$value["imagen_tipo"]?>" alt="news_type">
              <p>1/6</p>
            </div>
            <div>
            <img class="imagenNews" src="img/</*?=$value["imagen"]?>" alt="imagenNoticia">
              <h2></*?=$value["titulo"] ?></h2>
              <p></*?=$value["descripcion"] ?></p>
              <p></*?=$value["valoraciones"]?>Valoraciones</p>
            </div>
          </div>
        </article>
        </div> -->



     </section>
     <section class="_rankTable">
     <h2 class="_rank2">Ranking de Usuarios</h2>
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

@include ('partials/footer')




  </body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
>>>>>>> 5ac489ae8a2fead8452abb7f5743c261efa2bc2a:resources/views/rankrealnews.blade.php
