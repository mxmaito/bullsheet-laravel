
@extends('layouts/main')

   @section('content')

     <section class="_ranking">
       <div class="_textosRanking">
       <h2 class="_rank">Ranking de Fake News</h2>
       <a class="_verNoticia" href="">ver todas las noticias</a>
       </div>

       <ul>
       -
       <li>

       <div class="card mb-3  " style="max-width: 540px;">
          <div class="row no-gutters">
             <div class="col-md-4">
                <img src="" class="card-img" alt="...">
              </div>
               <div class="col-md-8">
                <div class="card-body">
                <div class="ranking_type">
              <img class="_newsType" src="" alt="news_type">
              <p>1/6</p>
            </div>
                  <h5 class="card-title">Titulo</h5>
                  <p class="card-text">Descripcion</p>
                  <p>Valoraciones</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
          </div>
        </div>

        </li>
        -
        </ul>

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
