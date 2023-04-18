<?php

namespace Database\Factories;

use App\Models\nota;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\tema;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nota>
 */
class notaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = nota::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user=user::inRandomOrder()->first();
        $tema=tema::inRandomOrder()->first();
        return [
            'titulo'=>$this->faker->sentence(),
            'texto'=>$this->faker->paragraph(),
            'importancia'=>$this->faker->randomElement(['poco importante','importante','muy importante']), 
            'hora'=>$this->faker->date(),
            'id_temas'=>$tema->id,
            'id_usuario'=>$user->id,
        ];
    }
}