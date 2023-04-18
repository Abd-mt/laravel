<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class asignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('asignaturas')->insert(['nombre'=>'UXD','nombre'=>'PROGRAMACIÓN LÓGICA Y FUNCIONAL','nombre'=>'LOWCODE','nombre'=>'ADMINISTRACIÓN DE REDES','nombre'=>'TALLER DE INVESTIGACIÓN']);
    
       
            
       
    }
}
