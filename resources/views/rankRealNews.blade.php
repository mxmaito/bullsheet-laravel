<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Playball" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <title>BullSheet</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  </head>
  <body>

    @include('partials/headerlog')
     <!--<section  class="_addNews">
       <div class="icons">
         <ul class="add">
           <li>
            <div class="_nombreUsuario">
              <a href=""><img class="_imgAvatar " src="" alt="Avatar" ></a>
              <img class="_medal" src="/img/medal.png" alt="medal">
              <p class="_textoUsuario">Nombre Usuario</p>
            </div>
         </li>
         <li>
           <div class="_webNews">
              <a href=""><img class="_list" src="/img/list.png" alt="list"></a>
              <img class="_internet" src="/img/internet.png" alt="internet">
              <p class="_textoWeb">Nueva web News</p>
            </div>
         </li>
         <li>
           <div class="_whatsNews">
              <a href=""><img class="_list" src="/img/list.png" alt="list"></a>
              <img class="_whatsapp" src="/img/whatsapp.png" alt="intenet">
              <p class="_textowhats">Nueva WhatsApp News</p>
            </div>
         </li>
         <li>
           <div>
              <a href=""><img class="_newspaper" src="/img/newspaper.png" alt="list"></a>
              <p class="_textoPropia">Noticia Propia</p>
            </div>
         </li>
         </ul>
       </div>
     </section>-->
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
