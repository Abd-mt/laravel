<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;
    public function users() {
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function temas() {
        return $this->belongsTo(topic::class,'id_temas');
    }
    protected $fillable =[
        'titulo',
        'texto',
        'importancia',
        'hora',
        'id_temas',
        'id_usuario'
        


    ];
}
