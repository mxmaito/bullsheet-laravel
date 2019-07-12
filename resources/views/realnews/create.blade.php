@extends('layouts.main')

@section('content')
<div class="_bgdegree">
<div class="noticia">
<div class="popup" id="popup">
<h1>Escribí una real news</h1>

<form action="{{ url('/realnews') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group row d-flex justify-content-center">
        <input type="text" name="headline" placeholder="Escribí el título" value="{{ old('headline') }}">
        <p>{{ $errors->first('headline') }}</p>
    </div>

    <div class="form-group row d-flex justify-content-center">
        <input type="text" name="subheading" placeholder="Escribí el subtítulo" value="{{ old('subheading') }}">
        <p>{{ $errors->first('subheading') }}</p>
    </div>

    <div class="form-group row d-flex justify-content-center">
        <input type="file" name="realnewsfile" placeholder="" value="{{ old('realnewsfile') }}">
                <p>{{ $errors->first('realnewsfile') }}</p>
    </div>

    <div class="form-group">
        <input type="text" name="caption" placeholder="Acá escribí el epígrafe de la foto" value="{{ old('caption') }}">
        <p>{{ $errors->first('caption') }}</p>
    </div>

    <div class="form-group">
        <textarea  name="text" id="" cols="30" rows="3" placeholder="Escribí tu noticia" value="{{ old('text') }}"></textarea>

        <p>{{ $errors->first('text') }}</p>
    </div>

    <div class="form-control">
        <button>Enviar</button>
    </div>
</form>
</div>
</div>

@endsection
</div>


