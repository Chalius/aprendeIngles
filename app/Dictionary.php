<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Dictionary extends Moloquent
{
    //
    protected $fillable = [
        'palabra',
        'pronunciacion',
        'nemotecnia',
        'traduccion',
        'img',
    ];
}
