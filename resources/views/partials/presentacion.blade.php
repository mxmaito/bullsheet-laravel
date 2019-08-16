<!--Sección de presentación-->

<div class="container-fluid p-0">
  <section class="_seccion-titulo">
    {{-- <article class="d-none d-md-block col-md-6 _articulo-titulo-imagen">
      <div class=" _contenedorImagen">
        <img src="img/img2.jpg" alt="imagen" class="_imagenTitulo">
      </div>
    </article> --}}
    <article id="bloque1" class="col-12 ">
      <h2>Bullsheet</h2>
      <p class="_textoArticulo">Somos una comunidad para opinar sobre la calidad de las noticias. Calificamos la información que circula a partir de criterios que ayudan a darnos cuenta si estamos frente a una fake news o no. Favorecemos el periodismo de calidad y denunciamos las malas prácticas que contribuyen con la desinformación. </p>
    </article>

    <article class="">
      <a href="{{ route('register') }}" class="btn __btnRegistrate">Registate y forma parte de nuestra comunidad!</a>
    </article>
  </section>
  <section>
    {{-- {{$fakenews}} --}}
    <div class="container">
      <div class="row">
            @foreach ($fakenews as $fakenew)
              <div class="col-sm-4 d-flex flex-column">
                <div class="card-columns d-flex align-content-around flex-wrap">
                  <div class="card bg-light" >
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
  </section>
</div>
