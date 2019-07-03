<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChekNew extends Model
{
  protected $table = 'chek_news';

  protected $with = ['user','fakenew'];

  protected $fillable = [
      'chek1', 'chek2', 'chek3', 'chek4', 'chek5', 'chek6', 'chek7', 'chek8', 'chek9', 'chek10', 'chekresult', 'fake_news_id'
  ];

  protected $dates = ['created_at'];



  public function user()
  {
      return $this->belongsTo('App\User',  'foreign_key');
  }

  public function fakeNews()
  {
      return $this->belongsTo('App\FakeNew', 'foreign_key');
  }


}
