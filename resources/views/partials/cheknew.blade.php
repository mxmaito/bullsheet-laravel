

<h1>Para chequear una noticia, completá el formulario</h1>



<form action="{{ url('/cheknews') }}" method="post" enctype="multipart/form-data">
    @csrf

      <input type="hidden" name="fake_news_id" value="{{$fakenew['id']}}">

    <div class="form-group">
      <label for="chek1">Conocías el medio en donde se publicó la noticia?</label><br>
        <input type="radio" name="chek1" value="1">Sí <br>
        <input type="radio" name="chek1" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek2">Tiene fecha de publicación?</label><br>
        <input type="radio" name="chek2" value="1">Sí <br>
        <input type="radio" name="chek3" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek3">Tiene autor?</label><br>
        <input type="radio" name="chek3" value="1">Sí <br>
        <input type="radio" name="chek3" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek4">Conocías al autor?</label><br>
        <input type="radio" name="chek4" value="1">Sí <br>
        <input type="radio" name="chek4" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek5">Se menciona alguna fuente de información?</label><br>
        <input type="radio" name="chek5" value="1">Sí <br>
        <input type="radio" name="chek5" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek6">Hay citas o testimonios?</label><br>
        <input type="radio" name="chek6" value="1">Sí <br>
        <input type="radio" name="chek6" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek7">Las fuentes de información o de los testimonios, te parecen ciertos?</label><br>
        <input type="radio" name="chek7" value="1">Sí <br>
        <input type="radio" name="chek7" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek8">Las fotos corresponden con la noticia?</label><br>
        <input type="radio" name="chek8" value="1">Sí <br>
        <input type="radio" name="chek8" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek9">Viste la noticia publicada en otro medio?</label><br>
        <input type="radio" name="chek9" value="1">Sí <br>
        <input type="radio" name="chek9" value="0">No <br>
    </div>

    <div class="form-group">
      <label for="chek10">Los comentarios de los lectores dicen que podría ser una fake news?</label><br>
        <input type="radio" name="chek10" value="0">Sí <br>
        <input type="radio" name="chek10" value="1">No <br>
    </div>

    <div class="form-control">
        <button>Enviar</button>
    </div>
</form>
