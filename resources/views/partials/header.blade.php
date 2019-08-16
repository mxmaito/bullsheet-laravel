<!--Header y NavBar-->
  <header>
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark _bgdegree">
      <a class="navbar-brand _logo" href="index.php">BullSheet</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item">
            <a class="nav-link  _navItem " href="">FAQ </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link _navItem" href="">ABOUT</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  _navItem" href="">RANK</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  _navItem" href="">ADD FAKE NEWS</a>
          </li>
          {{-- <li class="nav-item ">
              <a  id="btn-abrir-popup"class="nav-link btn-abrir-popup" href="{{'/register'}}">REGISTRARSE</a>
          </li> --}}
          <li class="nav-item  _navItem ">
              <a class="nav-link" href="{{'/login'}}">LOGIN</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid p-0 h-25 ">
      <div id="carouselExampleFade" class="carousel slide carousel-fade vh-50" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/img2.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block __carrouselCaption">
              <h5>BullSheet</h5>
              <p>Democraticemos la informacion</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/img3.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block __carrouselCaption2">
              <h5>BullSheet</h5>
              <p>Pongamos la lupa sobre las noticias</p>
            </div>
          </div>
        </div>

      </div>
      {{-- <div class="jumbotron jumbotron-fluid _bghome m-0">
      <div class="container _jumbotext">
        <h1 class="display-4 _jumbotitle">Bullsheet Fake News</h1>
        <p class="lead _jumbop">Pongamos las noticias sobre la mesa</p>
      </div>
    </div>  --}}
    </div>

  </header>
