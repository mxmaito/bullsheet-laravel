<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table= 'polls';

    protected $fillable=['user_id','fake_news_id','result'];

}
