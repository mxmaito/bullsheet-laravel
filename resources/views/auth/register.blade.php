

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Playball" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
  <title>Registro</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>


 <!--Sección del formulario de registro-->
<div class="overlay" id="overlay">
  <a class="_logoregistro" href="/home">BullSheet</a>
  <div class="popup" id="popup">
  <?php
    if(isset($errores)):?>
      <ul class="alert alert-danger">
        <?php
        foreach ($errores as $key => $value) :?>
          <li> <?=$value;?> </li>
          <?php endforeach;?>
      </ul>
    <?php endif;?>

    <!--<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times-circle"></i></a>-->
    <h3>Registrate!</h3>
    <h4>Y forma parte de nuestra comunidad!</h4>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row d-flex justify-content-center">
            <div class="col-md-6">
                <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="Nombre">

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <div class="col-md-6">
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Apellido">

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        <div class="form-group row d-flex justify-content-center">
            <div class="col-md-6 ">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row d-flex justify-content-center">
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmá el password">
            </div>
        </div>

        <div class="form-group row mb-0 d-flex justify-content-center">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

<!--Termina la Sección del formulario de registro-->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
