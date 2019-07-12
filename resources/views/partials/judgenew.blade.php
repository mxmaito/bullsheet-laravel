<div class="text-center">

<br>
<h2>Contanos qué opinás de la Real News</h2>

<h5>
<form action="{{ url('/rankrealnews') }}" method="post" enctype="multipart/form-data">
    @csrf

      <input type="hidden" name="real_news_id" value="{{$realnew['id']}}">
  <div class="container col-4">


    <div class="input-group">
        <select name="judge" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" required>
          <option value="" selected disabled hidden>Elegí una opción</option>
          <option value="1">Malísima</option>
          <option value="2">Masomenos</option>
          <option value="3">Buena</option>
          <option value="4">Buenísima</option>
          <option value="5">Increíble</option>
        </select>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Enviar</button>
        </div>
    </div>
 </div>
</form>
</h5>
</div>
