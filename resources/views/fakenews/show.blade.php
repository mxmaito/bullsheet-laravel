@extends('layouts.show')

@section('content')


<h1>Acá entrás a una fakenew específica y podés hacer comentarios</h1>
{{$fakenew}}<br>

<img src="/storage/fakenewsfiles/{{$fakenew['fakenewsfile']}}" alt="">
{{$fakenew}}<br>

@endsection
