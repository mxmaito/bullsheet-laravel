@extends('layouts.main')

@section('content')
<div class="container">


<h1>Subí un archivo que te hayan mandado por whatsapp</h1>

<form action="{{ url('/fakenews') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <input type="text"  class="form-control" name="title" placeholder="Escribí el título" value="{{ old('title') }}">
        <p>{{ $errors->first('title') }}</p>
    </div>

    <div class="form-group">
        <input type="file" name="fakenewsfile" placeholder="" value="{{ old('file') }}">
                <p>{{ $errors->first('file') }}</p>
    </div>

    <div class="form-group">
    <textarea  name="question" class="form-control" rows="3" placeholder="Contanos qué te hace pensar que esta información es fake" value="{{ old('question') }}"></textarea>
        <p>{{ $errors->first('question') }}</p>
    </div>

    <div class="">
        <button class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
@endsection
