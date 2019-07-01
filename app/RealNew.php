<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealNew extends Model
{
  protected $table = 'real_news';

  protected $with = ['user'];

  protected $fillable = [
      'headline', 'subheading', 'photo', 'caption', 'text'
  ];

  protected $dates = ['created_at'];


  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
