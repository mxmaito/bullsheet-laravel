<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FakeNew extends Model
{
  protected $table = 'fake_news';

  protected $with = ['user'];

  protected $fillable = [
      'title', 'file', 'question', 'fakenewsfile','average'
  ];

  protected $dates = ['created_at'];

  /**
   * Usuario que denuncio la noticia
   */
  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function checks()
  {
      return $this->hasMany('App\ChekNew', 'fake_news_id');
  }
}
