<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    use HasFactory;
    public function tema() {
        return $this->belongsTo(asignatura::class,'id_asignatura');
    }
    public function nota() {
        return $this->hasMany(nota::class,'id_temas');
    }

    protected $fillable =[
        'nombre',
        'parcial',
        'id_asignatura'


    ];
}
