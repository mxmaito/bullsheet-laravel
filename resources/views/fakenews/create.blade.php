@extends('layouts.main')

@section('content')


<h1>Subí un archivo que te hayan mandado por whatsapp</h1>

<form action="{{ url('/fakenews') }}" method="post">
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
        <input type="text" name="question" placeholder="Contanos qué te hace pensar que esta información es fake" value="{{ old('question') }}">
        <p>{{ $errors->first('question') }}</p>
    </div>

    <div class="form-control">
        <button>Enviar</button>
    </div>
</form>

@endsection
