<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChekNew extends Model
{
  protected $table = 'chek_news';

  protected $with = ['user','fakenew'];

  protected $fillable = [
      'user_id','value','cheks_id', 'fake_news_id'];

  protected $dates = ['created_at'];


  //  public function refreshScore() {
  //    return $this->atrributes['chekresult']= $this->chek1 + $this->chek2 + $this->chek3 +
  //    $this->chek4 + $this->chek5 + $this->chek6 +
  //    $this->chek7 + $this->chek8 + $this->chek9 +
  //    $this->chek10;
  //
  // }


  public function user()
  {
      return $this->belongsTo('App\User',  'foreign_key');
  }

  public function fakeNews()
  {
      return $this->belongsTo('App\FakeNew', 'foreign_key');
  }


}
