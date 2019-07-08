@extends('layouts.main')
@section('content')
  <div class="container -p">
  <form class="" action="/profile/edit" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label for="birth_date">Birth Date:</label>
        <input type="date" class="form-control" name="birth_date"  value="">
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
        <input type="text" class="form-control" name="country"  value="">
    </div>
    <div class="form-group">
     <label for="avatar">Avatar:</label>
       <input type="file"  class="" name="avatar"  value="">
   </div>
        <input type="submit" name="" value="Enviar">
  </form>
  </div>
@endsection()
