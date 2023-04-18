<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignatura extends Model
{
    use HasFactory;
    public function temas() {
        return $this->hasMany(tema::class,'id_asignatura');
    }
    protected $fillable =[
        
        'nombre'


    ];
}
