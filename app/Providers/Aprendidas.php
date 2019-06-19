<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;
class Aprendidas extends Moloquent
{
    //
    protected $fillable=[
      'palabra',
      'fechaRepaso',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
