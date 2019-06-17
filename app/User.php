<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
#use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefono',
        'edad',
        'notas',
        'sesiones',
        'type',
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

#FIJANDO UNA CONSTANTE Y FUNCION PARA QUE SE PUEDA VERIFICAR COMO ADMINISTRADOR
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

/**ESTE ERA CODIGO DE OTRO EJERCICIO
    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }
    **/

#FUNCION QUE VALIDA EN ROUTES:PHP
    public function esAdmin(){
        if ($this->type == 'admin'){
            return true;
        }
    return false;
    }
}

