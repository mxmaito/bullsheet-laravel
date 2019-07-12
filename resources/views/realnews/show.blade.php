@extends('layouts.showrealnews')

@section('content')

<section class="_ranking text-light text-center">


<br>
<h2>{{$realnew->headline}}</h2>
<br>
<h4>{{$realnew->subheading}}</h4>
<br>
  <div class="_contenedorImagenNews">
  <img class="_imagenNews" src="/storage/realnewsfiles/{{$realnew['realnewsfile']}}" alt=""><br>
  </div>
<h5>({{$realnew->caption}})</h5>
<br>
<h3>{{$realnew->text}}</h3>
<br>

</section>

@endsection
