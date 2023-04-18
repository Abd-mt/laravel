<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\asignatura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tema>
 */
class temaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $as=asignatura::inRandomOrder()->first();
        return [
            'nombre'=>$this->faker->sentence(),
            'id_asignatura'=>$as->id,
            'parcial'=>$this->faker->randomElement(['primero','segundo','tercero','cuarto','quinto','sexto']),
        ];
    }
}
