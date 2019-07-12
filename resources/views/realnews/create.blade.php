@extends('layouts.main')

@section('content')
<div class="container">

<h1>Escribí una real news</h1>

<form action="{{ url('/realnews') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <input type="text" class="form-control" name="headline" placeholder="Escribí el título" value="{{ old('headline') }}">
        <p>{{ $errors->first('headline') }}</p>
    </div>

    <div class="form-group">
        <input type="text"  class="form-control" name="subheading" placeholder="Escribí el subtítulo" value="{{ old('subheading') }}">
        <p>{{ $errors->first('subheading') }}</p>
    </div>



    <div class="form-group">
        <input type="text" class="form-control" name="caption" placeholder="Acá escribí el epígrafe de la foto" value="{{ old('caption') }}">
        <p>{{ $errors->first('caption') }}</p>
    </div>

    <div class="form-group">
        <textarea  name="text" id="" class="form-control" rows="3" placeholder="Escribí tu noticia" value="{{ old('text') }}"></textarea>

        <p>{{ $errors->first('text') }}</p>
    </div>
    <div class="form-group">
        <input type="file"  name="realnewsfile" placeholder="" value="{{ old('realnewsfile') }}">
                <p>{{ $errors->first('realnewsfile') }}</p>
    </div>
    <div class="">
        <button class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
@endsection
