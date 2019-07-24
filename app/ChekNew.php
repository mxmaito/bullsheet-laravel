<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChekNew extends Model
{
  protected $table = 'chek_news';

  protected $with = ['user','fakenew'];

  protected $fillable = [
      'user_id', 'cheks_id','value', 'fake_news_id'
  ];

  protected $dates = ['created_at'];



  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function fakeNews()
  {
      return $this->belongsTo('App\FakeNew', 'cheks_id');
  }


}
