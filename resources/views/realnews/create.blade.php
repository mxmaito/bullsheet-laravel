@extends('layouts.main')

@section('content')


<h1>Escribí una real news</h1>

<form action="{{ url('/realnews') }}" method="post">
    @csrf

    <div class="form-group">
        <input type="text" name="headline" placeholder="Escribí el título" value="{{ old('headline') }}">
        <p>{{ $errors->first('headline') }}</p>
    </div>

    <div class="form-group">
        <input type="text" name="subheading" placeholder="Escribí el subtítulo" value="{{ old('subheading') }}">
        <p>{{ $errors->first('subheading') }}</p>
    </div>

    <div class="form-group">
        <input type="file" name="file" placeholder="" value="{{ old('file') }}">
                <p>{{ $errors->first('file') }}</p>
    </div>

    <div class="form-group">
        <input type="text" name="caption" placeholder="Acá escribí el epígrafe de la foto" value="{{ old('caption') }}">
        <p>{{ $errors->first('caption') }}</p>
    </div>

    <div class="form-group">
        <input type="text" name="text" placeholder="Escribí tu noticia" value="{{ old('text') }}">
        <p>{{ $errors->first('text') }}</p>
    </div>

    <div class="form-control">
        <button>Enviar</button>
    </div>
</form>

@endsection
