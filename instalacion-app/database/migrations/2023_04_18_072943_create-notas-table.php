<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('texto');
            $table->string('importancia');
            $table->dateTimeTz('hora', $precision = 0)->nullable();
            $table->timestamps();
            $table->foreignId('id_temas')
             ->constrained('temas')
             ->cascadeOnUpdate();
             $table->foreignId('id_usuario')
             ->constrained('users')
             ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
