<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

  public function index(){
    // dd(Auth::user());
  return view('auth.profile');

  }

  public function show($id){

  }

  public function edit($id){
    // return view('auth.editProfile');
  }

  public function update(Request $request)
  {
      // $this->validate($request, $this->getValidationRules());
      //
      // $user=Auth::user();
      // $user->birth_date = $request['birth_date'];
      // $user->country = $request['country'];
      // // $user->avatar = $request[store($request->avatar);
      // $user->save();
      //
      // return redirect('/profile')



  }

  public function store(Request $request)
  {
    $this->validate($request, $this->getValidationRules());
    $request->file('avatar')->storePublicly('avatars');

     $rutaArchivo = $request->file('avatar')->store('public');
     $nombreArchivo = basename($rutaArchivo);

    $user=Auth::user();
    $user->birth_date = $request->input('birth_date');
    $user->country = $request->input('country');
    $user->avatar = $nombreArchivo;

    $user->save();

    return redirect('/profile');
  }

  private function getValidationRules(){
    return[
      'avatar' => 'required | file',
    ];
  }
}
