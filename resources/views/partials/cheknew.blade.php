
<div class="container p-3 col-6">

<br>
<h2 class="chekNew_title">Ayudanos a saber si es una Fake News, para eso favor completá el formulario</h2>
<br>
<div class="col-12">

<form action="{{ url('/rankfakenews') }}" method="post" enctype="multipart/form-data" >
    @csrf

      <input type="hidden" name="fake_news_id" value="{{$fakenew['id']}}">

      <div class="form-group row flex-nowrap justyfi-content-center align-items-center">
          <label class="form-label flex-grow-1" for="chek1">Conocías el medio en donde se publicó la noticia?</label>
          <div class="col-4 justify-content-end btn-group-sm btn-group">
            <input class="btn btn-success" type="radio" name="chek1"  value="1">SI
            <input class="btn btn-danger " type="radio" name="chek1" value="0">NO
          </div>
      </div>

      <div class="form-group row flex-nowrap  align-items-center">
        <label class="col-form-label flex-grow-1" for="chek2">Tiene fecha de publicación?</label>
        <div class="col-4 justify-content-end btn-group-sm btn-group">
        <input class="btn btn-success" type="radio" name="chek2"  value="1">SI
        <input class="btn btn-danger " type="radio" name="chek2" value="0">NO
        </div>


      </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label" for="chek3">Tiene autor? </label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
      <input class="btn btn-success" type="radio" name="chek3"  value="1">SI
      <input class="btn btn-danger " type="radio" name="chek3" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label" for="chek4">Conocías al autor?</label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
      <input class="btn btn-success" type="radio" name="chek4"  value="1">SI
      <input class="btn btn-danger " type="radio" name="chek4" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label" for="chek5">Se menciona alguna fuente de información?</label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
      <input class="btn btn-success" type="radio" name="chek5"  value="1">SI
      <input class="btn btn-danger" type="radio" name="chek5" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label"  for="chek6">Hay citas o testimonios?</label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
        <input class="btn btn-success" type="radio" name="chek6"  value="1">SI
        <input class="btn btn-danger" type="radio" name="chek6" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label" for="chek7" >Las fuentes de información o de los testimonios, te parecen ciertos?</label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
        <input class="btn btn-danger" type="radio" name="chek7"  value="1">SI
        <input class=" btn btn-danger" type="radio" name="chek7" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label" for="chek8">Las fotos corresponden con la noticia?</label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
        <input class="btn btn-danger" type="radio" name="chek8"  value="1">SI
        <input class="btn btn-danger " type="radio" name="chek8" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label"  for="chek9" >Viste la noticia publicada en otro medio?</label>
      <div class="col-4 justify-content-end btn-group-sm btn-group">
        <input class="btn btn-danger" type="radio" name="chek9"  value="1">SI
        <input class=" btn btn-danger" type="radio" name="chek9" value="0">NO
      </div>
    </div>

    <div class="form-group row flex-nowrap justify-content-between align-items-center">
      <label class="col-form-label"  for="chek10">Los comentarios de los lectores dicen que podría ser una fake news?</label>
        <div class="col-4 justify-content-end btn-group-sm btn-group">
        <input class="btn" type="radio" name="chek10"  value="0">SI
        <input class="btn" type="radio" name="chek10" value="1">NO
        </div>
    </div>

    <div class="form-group">
       <button class="btn btn-primary">Enviar</button>
    </div>

</form>
</div>
</div>
