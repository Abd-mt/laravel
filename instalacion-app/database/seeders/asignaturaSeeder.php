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
       DB::table('asignaturas')->insert(['nombre'=>'UXD']);
       DB::table('asignaturas')->insert(['nombre'=>'PROGRAMACIÓN LÓGICA Y FUNCIONAL']);
       DB::table('asignaturas')->insert(['nombre'=>'LOWCODE']);
       DB::table('asignaturas')->insert(['nombre'=>'ADMINISTRACIÓN DE REDES']);
       DB::table('asignaturas')->insert(['nombre'=>'TALLER DE INVESTIGACIÓN']);
       
            
       
    }
}
