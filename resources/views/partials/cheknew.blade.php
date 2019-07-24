
<div class="container p-3 mr-3">
{{-- {{$cheks}} --}}
<div class="">
  <h3 class="chekNew_title">Ayudanos a saber si es una Fake News, para eso favor completá el formulario</h3>
</div>

  <div class="">
   <form action="{{ url('/rankfakenews') }}" method="post" enctype="multipart/form-data" >
     @csrf
     <input type="hidden" name="fake_news_id" value="{{$fakenew['id']}}">
     @foreach ($cheks as $chek)
       <div class="form-row">
         <div class="col">
           <label for="{{$chek->id}}">{{$chek->question}}</label>
         </div>
         <div class="col">
           <input type="hidden" name="chek[{{$chek->id}}]" value="0">
           <input name="chek[{{$chek->id}}]" value="1" type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="small" data-on="SI" data-off="NO">
         </div>
       </div>
     @endforeach
     <input type="submit" class="btn btn-primary" name="" value="Enviar">
    </form>
  </div>
</div>
