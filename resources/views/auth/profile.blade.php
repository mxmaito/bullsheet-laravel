@extends('layouts.main')
@section('content')
{{-- {{Auth::user()}} --}}
  <div class="container p-3">
    <div class="row align-items-center ">
      <div class="col sm-6 md-6 lg-6 d-flex justify-content-center ">
        <a href="profile/edit">Edit profile</a> <br>
        <img src="/storage/{{Auth::user()->avatar}}" alt="avatar" class="_imgAvatar">

      </div>
      <div class="col sm-6 md-6 lg-6">
        <ul>
          <li><h2>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h2></li>
          <li>Birth Date:{{Auth::user()->birth_date}}</li>
          <li>Country:{{Auth::user()->country}}</li>
          </ul>
          <a class="btn btn-primary" href="profile/edit">Edit profile</a> <br>
      </div>
    </div>
  </div>
@endsection()
