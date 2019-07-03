<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      public $table = 'users';

      //protected $table = 'movies';
      //protected $primaryKey = 'id';
      protected $guarded = []; // colocar aquí los campos que no quiero que se puedan modificar


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fakeNews(){
      return $this->hasMany(FakeNew::class);
    }

    public function realNews(){
      return $this->hasMany(RealNew::class);
    }

    public function chekNews(){
      return $this->hasMany(ChekNew::class);
    }
}
