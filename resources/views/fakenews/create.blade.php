@extends('layouts.main')

@section('content')
<div class="_bgdegree">
<div class="noticia">
<div class="popup" id="popup">

<h1>Subí un archivo que te hayan mandado por whatsapp</h1>

<form action="{{ url('/fakenews') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <input type="text" name="title" placeholder="Escribí el título" value="{{ old('title') }}">
        <p>{{ $errors->first('title') }}</p>
    </div>

    <div class="form-group">
        <input type="file" name="fakenewsfile" placeholder="" value="{{ old('file') }}">
                <p>{{ $errors->first('file') }}</p>
    </div>

    <div class="form-group">
    <textarea  name="question" id="" cols="30" rows="5" placeholder="Contanos qué te hace pensar que esta información es fake" value="{{ old('question') }}"></textarea>
        <p>{{ $errors->first('question') }}</p>
    </div>

    <div class="form-control">
        <button>Enviar</button>
    </div>
</form>
</div>
</div>
@endsection
</div>


