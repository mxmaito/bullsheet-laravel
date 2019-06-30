<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FakeNew extends Model
{
  protected $table = 'fakenews';

  protected $with = ['user'];

  protected $fillable = [
      'title', 'file', 'question'
  ];

  protected $dates = ['created_at'];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

}
