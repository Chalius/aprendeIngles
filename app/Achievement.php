<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Achievement extends Moloquent
{
    protected $fillable = [
      'name',
      'description',
      'img',
    ];

}
