<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    Protected function name(): Attribute
    {
            return new Attribute
        (
        get: function ($value)
        {return UCWORDS ($value);},


        set: function ($value)
        {return strtolower ($value);}
        );
    }

    public function nota() {
        return $this->hasMany(nota::class,'id_usuario');
    }
    protected $fillable =[
        'name',
        'email',
        'email_verified_at',
        'password',
        'matricula',
        'carrera'
    ];
}
