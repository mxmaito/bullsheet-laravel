<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JudgeNew extends Model
{
  protected $table = 'judge_news';

  protected $with = ['user','realnew'];

  protected $fillable = [
      'judge', 'real_news_id'
  ];

  protected $dates = ['created_at'];



  public function user()
  {
      return $this->belongsTo('App\User',  'foreign_key');
  }

  public function realNews()
  {
      return $this->belongsTo('App\RealNew', 'foreign_key');
  }

}
