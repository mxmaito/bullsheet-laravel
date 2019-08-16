<?php
use Illuminate\Validation\DatabasePresenceVerifier;
use App\Http\Controllers\RealNewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/registro', function(){
  return view ('auth/register');
});
Route::get('/login', function(){
  return view ('login');
});

//Route::get('/news', 'NewsController@index');

Route::get('/fakenews', 'FakeNewsController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/fakenews/new', 'FakeNewsController@create');
    Route::get('/fakenews/{fakenew}', 'FakeNewsController@show');
    Route::post('/fakenews', 'FakeNewsController@store');
    // Route::get('/rankrealnews', 'RankRealNewsController@index');
    Route::get('/searchfakenews', 'SearchFakeNewsController@index');
    Route::get('/rankrealnews', 'RankRealNewsController@index');
    Route::get('/rankfakenews', 'RankFakeNewsController@index');
    Route::post('/rankfakenews', 'ChekNewsController@store');
    // Route::get('/rankrealnews', 'RankRealNewsController@index');
    // Route::post('/rankrealnews', 'JudgeNewsController@store');
    //Route::get('/news', 'NewsController@index');
    //Route::get('/realnews', 'RealNewsController@index');
    //Route::get('/realnews/new', 'RealNewsController@create');
    //Route::get('/realnews/{realnew}', 'RealNewsController@show');
    //Route::post('/realnews', 'RealNewsController@store');
    Route::get('/profile','UserController@index');
    Route::get('/profile/edit',function(){
    return view('auth.editProfile');
    });
    Route::post('/profile/edit','UserController@store');
    });




Route::get('/', 'BullsheetController@index');



Route::get('/logout', function(){
  return view('/layouts/home');
});



Auth::routes();
