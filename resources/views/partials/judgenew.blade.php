<h1>Ponele un puntaje a la Real News</h1>



<form action="{{ url('/rankrealnews') }}" method="post" enctype="multipart/form-data">
    @csrf

      <input type="hidden" name="real_news_id" value="{{$realnew['id']}}">

    <div class="form-group">
      <label for="judge">Del 1 al 10, qué opinás de la noticia?</label><br>
        <input type="radio" name="judge" value="1">1 <br>
        <input type="radio" name="judge" value="2">2 <br>
        <input type="radio" name="judge" value="3">3 <br>
        <input type="radio" name="judge" value="4">4 <br>
        <input type="radio" name="judge" value="5">5 <br>
        <input type="radio" name="judge" value="6">6 <br>
        <input type="radio" name="judge" value="7">7 <br>
        <input type="radio" name="judge" value="8">8 <br>
        <input type="radio" name="judge" value="9">9 <br>
        <input type="radio" name="judge" value="10">10 <br>
    </div>

    <div class="form-control">
        <button>Enviar</button>
    </div>
</form>
